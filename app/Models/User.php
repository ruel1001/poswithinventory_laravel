<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
 
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

     protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable =[
        'uuid',
        'user_name',
        'address',
        'email',
        'username',
        'user_type',
        'password'
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
