<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bunga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'stok',
        'harga',
        'image',
    ];
}
