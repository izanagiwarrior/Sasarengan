<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // use HasFactory;
    protected $tabel = 'orders';

    protected $fillable = [
        'product_id','amount','buyer_name','buyer_contact'
    ];
}
