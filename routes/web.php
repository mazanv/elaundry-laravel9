<?php


// use App\Http\Controllers\DProdukController;
// use App\Http\Controllers\DOutletController;
// use App\Http\Controllers\DKurirController;

// -- KELOLA DATA use resource --

use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\DaPenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OutletController;


use App\Http\Controllers\ELaundryController;
use App\Http\Controllers\EProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\NewProfilController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserIndexController;
use App\Http\Controllers\UserProdukController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('admin/profil', 'App/Http/Controllers/ProfilController/');



//Beranda
Route::middleware('auth')->get('home', HomeController::class)->name('home');

//Logout
Route::middleware('auth')->get('logout', LogoutController::class)->name('keluar');

// Admin
Route::resource('admin/profil', NewProfilController::class)->middleware('auth');
Route::middleware('auth')->get('admin/profil', ProfilController::class)->name('profil');
Route::middleware('auth')->get('admin/profil_edit', ProfilController::class)->name('profil_edit');

//E_Laundry 
Route::middleware('auth')->get('elaundry/e_laundry', ELaundryController::class)->name('e_laundry');
Route::middleware('auth')->get('elaundry/products', EProductsController::class)->name('products');

//Kelola Data ELaundry
//Produk
// Route::middleware('auth')->get('kelola_data/produk/dproduk', DProdukController::class)->name('dataproduk');
Route::get('produk', [ProdukController::class, 'index']);
Route::get('/tambah_produk', [ProdukController::class, 'create']);
//Outlet

Route::resource('/outlet', App\Http\Controllers\OutletController::class);
// Route::middleware('auth')->get('kelola_data/outlet/doutlet', OutletController::class)->name('dataoutlet');
// Route::get('kelola_data/outlet/tambah_outlet', DOutletController::class)->name('tambah_outlet');
// Route::get('outlet', [OutletController::class, 'index']);
// Route::get('/tambah_outlet', [OutletController::class, 'create']);

//Kurir
Route::resource('/kurir', App\Http\Controllers\KurirController::class);
// Route::resource('/kurir', KurirController::class)->middleware('auth');
// Route::post('/kurir/tambah_kurir', KurirController::class, 'tambah');
// ('kurir', [KurirController::class, 'index']);
// Route::post('/tambah_kurir', [KurirController::class, 'store']);
// Route::post('/tambah_kurir', [KurirController::class, 'store']);

//Customer
Route::get('customer', [CustomerController::class, 'index']);

//User Home
Route::middleware('auth')->get('user/home/template', UserIndexController::class)->name('home_user');
//User Prduk
Route::middleware('auth')->get('user/products/layouts', UserProdukController::class)->name('layout');
Route::get('pelanggan', [App\Http\Controllers\DaPenggunaController::class, 'index']);
