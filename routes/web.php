<?php

use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupons');
Route::get('/admin/coupons/edit/{idvoucher}', AdminEditCouponsComponent::class)->name('admin.editcoupons');
