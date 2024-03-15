<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var 
     */
    protected $primaryKey='usu_id';
    protected $fillable = [
        'name',
        'usu_nombre',
        'email',
        'password',
        'usu_telefono',
        'rol_id',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var
     */
    protected $casts = [
        'rol_id'=>'integer',
        'usu_nombre'=>'string',
        'usu_telefono'=>'string',
        'password'=>'hashed',

        

      
    ];
}
