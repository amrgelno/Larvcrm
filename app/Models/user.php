<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;   //404 page

// class Admin extends Model    /* use Admin Tabel */

class user extends Authenticatable

{

    use Notifiable;
  //  use HasFactory;

    protected $table = 'users';

     protected $fillable = ['username','email','password','Pic','token'];

     public $timestamps=true;   // default  true or false



}
