<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  public $timestamps = false;

  protected $fillable = ['name', 'username', 'email', 'password', 'no_hp', 'gambar'];

}
