<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Entrada de Dinheiro
 */
class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'amount',
        'source',
        'description'
    ];
}
