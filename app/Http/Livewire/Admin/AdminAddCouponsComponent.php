<?php

namespace App\Http\Livewire\Admin;

use App\Models\voucher;
use Livewire\Component;

class AdminAddCouponsComponent extends Component
{
    public $code, $value, $start_date, $exp_date;
    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')
            ->extends('dashboard.layouts.main')
            ->section('container');
    }

    public function createCoupon()
    {
        voucher::create([
            'disc_name' => $this->code,
            'discount' => $this->value / 100,
            'start_time' => $this->start_date,
            'expire_time' => $this->exp_date,
        ]);
        return redirect(route('admin.coupons'))->with('success', 'data berhasil disimpan');
    }
}
