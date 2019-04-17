<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function foods(){
        return $this->hasMany(food::class,"category_id","id");
    }
}
