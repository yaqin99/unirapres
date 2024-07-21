<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MasukanController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[PengajuanController::class , 'layout']);
Route::get('/berita/{id}',[BeritaController::class , 'news']);
Route::get('/dosen/akun/{id}',[PengajuanController::class , 'akun']);
Route::put('/dosen/akun/update/{id}',[DosenController::class , 'update']);
Route::get('/dosen/listPengajuan',[PengajuanController::class , 'list']);
Route::put('/dosen/listPengajuan/editPengajuan/{id}',[PengajuanController::class , 'editPengajuan']);

Route::get('/admin',[AdminController::class , 'adminPengajuan'])->middleware('AdminNotLogged');
Route::get('/admin/signIn',[AdminController::class , 'signIn'])->middleware('AdminLogged');
Route::get('/admin/pengajuan',[AdminController::class , 'adminPengajuan'])->middleware('AdminNotLogged');
Route::get('/admin/berita',[AdminController::class , 'adminBerita'])->middleware('AdminNotLogged');
Route::get('/editNews/{id}',[AdminController::class , 'editNews']);
Route::get('/katalog',[AdminController::class , 'katalog']);

Route::get('/dosen/signIn',[DosenController::class , 'signIn'])->middleware('guest');
Route::get('/dosen/signUp',[DosenController::class , 'signUp'])->middleware('guest');
Route::post('/logout',[AuthController::class , 'logOut']);
Route::post('/logoutAdmin',[AdminController::class , 'logOut']);

Route::post('/loginDosen',[AuthController::class , 'signIn']);
Route::post('/loginAdmin',[AdminController::class , 'login']);
Route::post('/masukan',[MasukanController::class , 'masukan']);

Route::put('/admin/pengajuan/editComment/{id}',[CommentController::class , 'editComment']);

Route::post('/addPengajuan',[PengajuanController::class , 'pengajuan']);
Route::post('/addNews',[BeritaController::class , 'addNews']);
Route::put('/terbit/{id}',[PengajuanController::class , 'terbit']);
Route::put('/editNews/{id}',[BeritaController::class , 'editNews']);


Route::post('/deleteBerita/{id}',[BeritaController::class , 'destroy']);
Route::post('/deletePengajuan/{id}',[PengajuanController::class , 'destroy']);

