<?php

namespace App\Http\Livewire\Admin;

use App\Models\voucher;
use Livewire\Component;

class AdminEditCouponsComponent extends Component
{
    public $idvouchers, $code, $value, $start_date, $exp_date;

    public function mount($idvoucher)
    {
        $vouchers = voucher::where('idvoucher', $idvoucher)->get();
        foreach ($vouchers as $voucher) {
            // if ($voucher) {
            $this->id = $voucher->idvoucher;
            $this->code = $voucher->disc_name;
            $this->value = $voucher->discount * 100;
            $this->start_date = $voucher->start_time;
            $this->exp_date = $voucher->expire_time;
            // }
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')
            ->extends('dashboard.layouts.main')
            ->section('container');
    }

    public function editCoupon()
    {
        voucher::where('idvoucher', $this->idvouchers)->update([
            'disc_name' => $this->code,
            'discount' => $this->value / 100,
            'start_time' => $this->start_date,
            'expire_time' => $this->exp_date,
        ]);

        return redirect(route('admin.coupons'))->with('success', 'data berhasil di update');
    }
}
