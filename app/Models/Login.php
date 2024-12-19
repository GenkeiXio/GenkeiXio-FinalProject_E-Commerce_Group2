<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

   // Allow mass assignment for the following fields
   protected $fillable = ['username', 'birthday'];
}
