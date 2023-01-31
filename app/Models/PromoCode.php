<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PromoCode extends Model
{
    use HasFactory;

    protected $fillable = ['product_name','total_price','promo_code',
    'discount_amount', 'grand_total'];
}
