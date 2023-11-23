<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RecoverPassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserpembeliController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// TAMBAHIN ADMIN UNTUK ROUTE
//LOGIN
Route::get("/", [LoginController::class, 'login'])->name('login')->middleware('isGuest');
Route::post("/proseslogin", [LoginController::class, 'proseslogin'])->name('proseslogin')->middleware('isGuest');
Route::get("/logout", [LoginController::class, 'logout'])->name('logout')->middleware('isLogin');

//DASHBOARD
Route::get("/index", [DashboardController::class, 'index'])->name('index')->middleware('isLogin');


//PRODUK
Route::get("/produk", [ProdukController::class, 'produk'])->name('produk')->middleware('isLogin');
Route::get("/createproduk", [ProdukController::class, 'createproduk'])->name('produk.create')->middleware('isLogin');
Route::post("/pushproduk", [ProdukController::class, 'pushproduk'])->name('produk.pushproduk')->middleware('isLogin');
Route::get("/editproduk/{id}", [ProdukController::class, 'edit'])->name('edit.produk')->middleware('isLogin');
Route::put("/updateproduk/{id}", [ProdukController::class, 'update'])->name('produk.update')->middleware('isLogin');
Route::delete("/deleteproduk/{id}", [ProdukController::class, 'delete'])->name('produk.delete')->middleware('isLogin');

//JASA
Route::get("/jasa", [JasaController::class, 'jasa'])->name('jasa')->middleware('isLogin');
Route::get("/createjasa", [JasaController::class, 'createjasa'])->name('jasa.create')->middleware('isLogin');
Route::post("/pushjasa", [JasaController::class, 'pushjasa'])->name('jasa.pushjasa')->middleware('isLogin');
Route::get("/editjasa/{id}", [JasaController::class, 'edit'])->name('edit.jasa')->middleware('isLogin');
Route::put("/updatejasa/{id}", [JasaController::class, 'update'])->name('jasa.update')->middleware('isLogin');
Route::delete("/deletejasa/{id}", [JasaController::class, 'delete'])->name('jasa.delete')->middleware('isLogin');

//PEMESANAN
Route::get("/pemesanan", [PemesananController::class, 'pemesanan'])->name('pemesanan')->middleware('isLogin');
Route::delete("/deletepemesanan/{id}", [PemesananController::class, 'delete'])->name('pemesanan.delete')->middleware('isLogin');
Route::get("/editpemesanan/{id}", [PemesananController::class, 'edit'])->name('pemesanan.edit')->middleware('isLogin');
Route::put("/updatepemesanan/{id}", [PemesananController::class, 'update'])->name('pemesanan.update')->middleware('isLogin');

// USER ADMIN
Route::get("/user", [UserController::class, 'user'])->name('user')->middleware('isLogin')->middleware('adminakses:superadmin');
Route::get("/create", [UserController::class, 'create'])->name('user.create')->middleware('isLogin')->middleware('adminakses:superadmin');
Route::post("/pushUser", [UserController::class, 'pushUser'])->name('user.pushUser')->middleware('isLogin')->middleware('adminakses:superadmin');
Route::get("/edit/{id}", [UserController::class, 'edit'])->name('user.edit')->middleware('isLogin')->middleware('adminakses:superadmin');
Route::put("/update/{id}", [UserController::class, 'update'])->name('user.update')->middleware('isLogin')->middleware('adminakses:superadmin');
Route::delete("/delete/{id}", [UserController::class, 'delete'])->name('user.delete')->middleware('isLogin')->middleware('adminakses:superadmin');

//USER PEMBELI
Route::get("/userpembeli", [UserpembeliController::class, 'userpembeli'])->name('userpembeli')->middleware('isLogin');
Route::get("/createuserpembeli", [UserpembeliController::class, 'create'])->name('userpembeli.create')->middleware('isLogin');
Route::post("/pushUserPembeli", [UserpembeliController::class, 'pushUserPembeli'])->name('userpembeli.pushUser')->middleware('isLogin');
Route::get("/edituserpembeli/{id}", [UserpembeliController::class, 'edit'])->name('userpembeli.edit')->middleware('isLogin');
Route::put("/updateuserpembeli/{id}", [UserpembeliController::class, 'update'])->name('userpembeli.update')->middleware('isLogin');
Route::delete('/deletepembeli/{id}', [UserpembeliController::class, 'hapuspembeli'])->name('hapuspembeli')->middleware('isLogin');

//Forgot Password
Route::get("/forgot", [ForgotPasswordController::class, 'forgot'])->name('forgot')->middleware('isGuest');
Route::post('/forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post')->middleware('isGuest');
Route::get("/password/reset/{token}", [RecoverPassController::class, 'recover'])->name('recoverpass')->middleware('isGuest');
Route::post('/reset-password', [RecoverPassController::class, 'submitResetPasswordForm'])->name('reset.password.post')->middleware('isGuest');
//Recover Password
