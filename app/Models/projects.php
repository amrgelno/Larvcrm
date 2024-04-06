<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class projects extends model

{

  // use Notifiable;
    use HasFactory;

   // use SoftDeletes;

   //protected $data=['deleted_at'];

    protected $table = 'projects';

     protected $fillable = ['id', 'title', 'Description', 'Deadline', 'Assigneduser', 'Assignedclient','status'];

     public $timestamps=true;   // default  true or false

//Eloquent ORM
     public function client()
     {
         return  $this->belongsTo('App\Models\client',"foreignkey",'Assignedclient');   // userid is foreign
     }
     
}
