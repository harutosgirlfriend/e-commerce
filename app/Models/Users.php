<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

// BARIS INI DIPERBAIKI: Anda harus mengimplementasikan Authenticatable
class Users extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false; 
    
    protected $fillable=['nama','no_hp','password','email','role'];
}