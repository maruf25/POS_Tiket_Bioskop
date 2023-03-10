<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    use HasFactory;

    protected $table = "vouchers";
    public $timestamps = false;
    protected $fillable = ['disc_name', 'discount', 'start_time', 'expire_time'];
}
