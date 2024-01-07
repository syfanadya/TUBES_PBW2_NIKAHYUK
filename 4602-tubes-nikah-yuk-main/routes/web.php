<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuatPesananController;
use App\Http\Controllers\EditStatusPembayaranController;
use App\Http\Controllers\EditStatusPesananController;
use App\Http\Controllers\InfoRekeningController;
use App\Http\Controllers\Invitation1Controller;
use App\Http\Controllers\Invitation2Controller;
use App\Http\Controllers\Invitation3Controller;
use App\Http\Controllers\PopUpSuksesController;
use App\Http\Controllers\ProsesEditPembayaranController;
use App\Http\Controllers\ProsesEditStatusPesananController;
use App\Http\Controllers\ProsesKomenController;
use App\Http\Controllers\ProsesPembayaranController;
use App\Http\Controllers\ProsesPesananController;
use App\Http\Controllers\StatusPembayaranController;
use App\Http\Controllers\StatusPesananController;
use App\Http\Controllers\SubmitBuktiController;
use App\Http\Controllers\TulisKomentarController;
use App\Http\Controllers\Undangan1Controller;
use App\Http\Controllers\Undangan2Controller;
use App\Http\Controllers\Undangan3Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginGagalController;
use App\Http\Controllers\LoginSuksesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Detail1Controller;
use App\Http\Controllers\Detail2Controller;
use App\Http\Controllers\Detail3Controller;
use App\Http\Controllers\CekLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SemuaKomentarController;
use App\Http\Controllers\EditInvitationController;
use App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/desain1', [Detail1Controller::class, 'index']);
Route::get('/home/desain2', [Detail2Controller::class, 'index']);
Route::get('/home/desain3', [Detail3Controller::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::match(["get","post"],'/login', [LoginController::class, 'index']);
Route::match(["get","post"],'/logingagal', [LoginGagalController::class, 'index']);
Route::post('/loginsukses', [LoginSuksesController::class, 'index']);
Route::match(["get","post"],'/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'index']);
Route::get('/ceklogin', [CekLoginController::class, 'ceklogin']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/semuakomentar', [SemuaKomentarController::class, 'index']);
Route::get('/tuliskomentar', [TulisKomentarController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/statuspesanan', [StatusPesananController::class, 'index']);

Route::get('/buatpesanan', [BuatPesananController::class, 'index']);
Route::get('/inforekening', [InfoRekeningController::class, 'index']);
Route::get('/submitbukti', [SubmitBuktiController::class, 'index']);
Route::get('/statuspembayaran', [StatusPembayaranController::class, 'index']);

Route::get('/popupsukses', [PopUpSuksesController::class, 'index']);
Route::get('/editstatuspesanan', [EditStatusPesananController::class, 'index']);
Route::get('desainundangan/desain3/editindex', [EditInvitationController::class, 'index']);
Route::post('/proseskomen', [ProsesKomenController::class, 'index']);
Route::post('/prosespesanan', [ProsesPesananController::class, 'index']);
Route::post('/prosespembayaran', [ProsesPembayaranController::class, 'index']);
Route::post('/proseseditpembayaran', [ProsesEditPembayaranController::class, 'index']);
Route::match(["get","post"],'/proseseditpesanan', [ProsesEditStatusPesananController::class, 'index']);
Route::get('/editstatuspembayaran', [EditStatusPembayaranController::class, 'index']);
Route::get('/desainundangan/desain1', [Undangan1Controller::class, 'index']);
Route::get('/desainundangan/desain2', [Undangan2Controller::class, 'index']);
Route::get('/desainundangan/desain3', [Undangan3Controller::class, 'index']);
Route::get('/desainundangan/desain1/invitation1', [Invitation1Controller::class, 'index']);
Route::get('/desainundangan/desain2/invitation2', [Invitation2Controller::class, 'index']);
Route::get('/desainundangan/desain3/invitation3', [Invitation3Controller::class, 'index']);
