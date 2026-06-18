<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductUnit extends Model
{
    protected $fillable = ['product_id', 'unit_name', 'conversion_to_base', 'is_purchase_unit'];

    protected $casts = [
        'conversion_to_base' => 'decimal:4',
        'is_purchase_unit' => 'boolean',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}