<?php

namespace App\Http\Livewire\Admin;

use App\Models\voucher;
use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public function render()
    {
        $coupons = voucher::all();
        return view('livewire.admin.admin-coupons-component', [
            "coupons" => $coupons,
        ])
            ->extends('dashboard.layouts.main')
            ->section('container');
    }

    public function deleteCoupon($idvoucher)
    {
        voucher::where('idvoucher', $idvoucher)->delete();
        session()->flash('success', 'coupon succes delete');
    }
}
