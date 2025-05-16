<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'issuer', 'file', 'date','details'];
    protected $casts = [
    'date' => 'date',
];

}
