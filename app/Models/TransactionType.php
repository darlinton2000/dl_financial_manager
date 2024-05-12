<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Tipo Transação
 */
class TransactionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
