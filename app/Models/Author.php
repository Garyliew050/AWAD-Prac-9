<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
    use Notifiable;
    protected $guard = 'author';
    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
}