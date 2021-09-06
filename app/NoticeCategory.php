<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeCategory extends Model
{
    protected $table = "tbl_notice_category";
   protected $fillable = ['title'];
}
