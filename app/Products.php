<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // use HasFactory;

    protected $tabel = 'products';

    protected $fillable = [
        'name','author','price','sinopsis','description','img_path'
    ];
}
