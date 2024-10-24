<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2CStock extends Model
{
    use HasFactory;

    protected $table = 'b2c_stock';

    protected $fillable = [
        'sku',
        'total_quantity'
    ];
}
