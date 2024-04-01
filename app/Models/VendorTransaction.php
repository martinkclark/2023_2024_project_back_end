<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'financial_year',
        'date_of_payment',
        'invoice_number',
        'gross_amount',
        'it_taxable_amount',
        'section_code',
        // Add other fillable fields as needed
    ];
}
