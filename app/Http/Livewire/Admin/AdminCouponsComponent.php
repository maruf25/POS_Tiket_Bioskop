<?php

namespace App\Http\Livewire\Admin;

use App\Models\voucher;
use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public $idcoupon;
    protected $listeners = ['deleteConfirmed' => 'deleteCoupon'];
    public function render()
    {
        $coupons = voucher::all();
        return view('livewire.admin.admin-coupons-component', [
            "coupons" => $coupons,
        ])
            ->extends('dashboard.layouts.main')
            ->section('container');
    }

    public function deleteConfirmation($idvoucher)
    {
        $this->idcoupon = $idvoucher;
        $this->dispatchBrowserEvent('show-delete-confirm');
    }
    public function deleteCoupon()
    {
        voucher::where('idvoucher', $this->idcoupon)->delete();
        $this->dispatchBrowserEvent('couponDeleted');
    }

    public function cekView()
    {
        return view('dashboard.index');
    }
}
