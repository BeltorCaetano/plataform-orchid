<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
   protected $fillable = ['email', 'password', 'name', 'avatar'];
 
}
