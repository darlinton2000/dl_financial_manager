<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Tipo Conta
 */
class AccountType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
