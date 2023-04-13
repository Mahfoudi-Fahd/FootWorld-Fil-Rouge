<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $table = 'order_item';

    protected $fillable = [
        'order_id',
        'item_id',
        'quantity',
        'price',
    ];
}
