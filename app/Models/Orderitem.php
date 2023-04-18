<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
/**
 * Get the user that owns the Orderitem
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }
}
