<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Conta a pagar
 */
class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'due_date',
        'amount',
        'description',
        'paid',
        'account_id'
    ];
}
