<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

/**
 * Usuário
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Retorna a imagem do usuário autênticado para o dashboard
     *
     * @return UrlGenerator
     */
    public static function adminlteImage(): UrlGenerator
    {
        $loggedId = intval(Auth::id());
        $user = User::find($loggedId);

        if ($user->image){
            return url("storage/$user->image");
        } else {
            return url("/user_default.png");
        }
    }
}
