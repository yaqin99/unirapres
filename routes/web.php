<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MasukanController;

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
Route::get('/dosen/listPengajuan',[PengajuanController::class , 'list']);
Route::get('/admin',[AdminController::class , 'adminLayout']);
Route::get('/admin/pengajuan',[AdminController::class , 'adminPengajuan']);
Route::get('/admin/berita',[AdminController::class , 'adminBerita']);
Route::get('/editNews/{id}',[AdminController::class , 'editNews']);
Route::get('/katalog',[AdminController::class , 'katalog']);

Route::get('/dosen/signIn',[DosenController::class , 'signIn'])->middleware('guest');
Route::get('/dosen/signUp',[DosenController::class , 'signUp'])->middleware('guest');
Route::post('/logout',[AuthController::class , 'logOut']);

Route::post('/loginDosen',[AuthController::class , 'signIn']);
Route::post('/masukan',[MasukanController::class , 'masukan']);

Route::post('/addPengajuan',[PengajuanController::class , 'pengajuan']);
Route::post('/addNews',[BeritaController::class , 'addNews']);
Route::put('/terbit/{id}',[PengajuanController::class , 'terbit']);
Route::put('/editNews/{id}',[BeritaController::class , 'editNews']);


Route::post('/deleteBerita/{id}',[BeritaController::class , 'destroy']);

