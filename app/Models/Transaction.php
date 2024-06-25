<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'depositor_id',
        'withdrawer_id',
        'description',
        'category',
        'amount',
        'charges',
        'complete',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Fetch the maximum ID from the database
            $maxId = self::max('id');
            $nextId = $maxId ? $maxId + 1 : 1;

            // Generate a unique invoice ID
            $model->invoice_id = 'INV-' . str_pad($nextId, 8, '0', STR_PAD_LEFT);
        });
    }
}
