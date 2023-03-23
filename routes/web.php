<?php

use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;
use App\Http\Livewire\Kasir\Index;
use App\Http\Livewire\Kasir\Kasir;
use App\Http\Livewire\Kasir\Seat;
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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupons');
Route::get('/admin/coupons/edit/{idvoucher}', AdminEditCouponsComponent::class)->name('admin.editcoupons');

// Route::get('/booking', function () {
//     return view('bookingSeat');
// });

Route::get('/', Index::class)->name('film');

Route::get('seat', Seat::class)->name('seat');
