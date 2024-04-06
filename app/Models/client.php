<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class client extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'client';

     protected $fillable = ['username', 'email','phone','image', 'created_at', 'updated_at'];

     public $timestamps=true;   // default  true or false

      /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //Eloquent ORM
    public function projects()
    {
        return $this->hasOne('App\Models\projects');
    }

}
