<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "tbl_student";
   protected $fillable = ['name','gender', 'email', 'phone', 'address','username','password','semester'];
}
