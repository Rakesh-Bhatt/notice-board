<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "tbl_notice";
    
   protected $fillable = ['description','image','category_id'];
   
   public function category()
    {
        return $this->hasOne('App\NoticeCategory', 'id', 'category_id');
    }
}
