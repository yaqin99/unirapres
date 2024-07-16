<?php

namespace App\Helpers;

use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ExternalAuth
{
  private $nama_depan;
  private $nama_belakang;
  private $username;
  private $password;
  private $email;
  private $alamat;
  private $no_hp;
  private $isDosen;
  private $token;

  public function login($username, $password)
  {
    try {
      $this->username = $username;
      $this->password = $password;
      $token = Http::asForm()->post(Env('API_SIMAT') . '/v1/token', [
        'username' => $username,
        'password' => $password
      ]);
      if (!$token->json()['data']['attributes']['access']) {
        return redirect()->back()->with('gagal', 'Tidak ada akun yang ditemukan');
      }
      $this->token = $token->json()['data']['attributes']['access'];
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function generateToken()
  {
    try {
      $user = Http::withToken($this->token)->get(Env('API_SIMAT') . '/v1/saya');
      return $user->json();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function prepareBody()
  {
    $user = $this->generateToken();
    $this->nama_depan = explode(' ', $user['data']['attributes']['nama'])[0];
    $this->nama_belakang = explode(' ', $user['data']['attributes']['nama']) > 1 ? explode(' ', $user['data']['attributes']['nama'])[1] : ' ';
    $this->email = $user['data']['attributes']['email'];
    $this->alamat = $user['data']['attributes']['alamat'];
    $this->isDosen = true;
  }

  public function isDosen()
  {
    $dkr = $this->generateToken();
    return $dkr['data']['type'] == 'dkr';
  }

  public function setDosen()
  {
    return [
      'nama_depan' => $this->nama_depan,
      'nama_belakang' => $this->nama_belakang,
      'username' => $this->username,
      'password' => Hash::make($this->password),
      'email' => $this->email,
      'alamat' => $this->alamat,
      'no_hp' => $this->no_hp,
      'isDosen' => $this->isDosen
    ];
  }

  public function existDosen()
  {
    $exist = Dosen::where('username', $this->username)->first();
    return $exist;
  }

  public function createDosen()
  {
    Dosen::create($this->setDosen());
  }

  public function updateDosen()
  {
    $exist = $this->existDosen();
    $exist->update($this->setDosen());
  }

  public static function SIMAT($username, $password)
  {
    $external = new ExternalAuth();
    $external->login($username, $password);

    # Disable comment if you want to check if the user is a dosen
    // if (!$external->isDosen()) {
    //   throw new \Exception('Bukan dosen');
    // }

    $external->prepareBody();

    $exist = $external->existDosen();
    if (!$exist) {
      $external->createDosen();
    } else {
      $external->updateDosen();
    }
  }
}
