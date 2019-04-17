<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

}
