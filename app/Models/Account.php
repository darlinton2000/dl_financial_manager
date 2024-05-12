<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Conta
 */
class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'balance',
        'account_type_id'
    ];
}
