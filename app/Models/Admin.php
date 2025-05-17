<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin extends  Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
}
