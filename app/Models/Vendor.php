<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'pan_number',
        'gst_number',
        'tin',
        'vendor_name',
        'owner_name',
        'vendor_type',
        'address',
    ];
}
