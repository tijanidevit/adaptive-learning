<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function tutor(){
        return $this->hasOne(Tutor::class);
    }

    public function admin(){
        return $this->hasOne(admin::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
