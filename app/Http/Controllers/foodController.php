<?php

namespace App\Http\Controllers;

use App\category;
use App\food;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;

class foodController extends Controller
{
    public function menu(){
        if (!Cache::has('category')) {
            $categories = category::orderBy('top', 'asc')->orderBy('left', 'asc')->get();
            Cache::forever('category',$categories);
        }else{
            $categories =  Cache::get('category');
        }
        return response()->json($categories);
    }


    public function foods($id){
        $menu  = food::with('category')->select('id','name','nameEN','explain','remain','category_id','like','cost','deliver_time')->where('category_id',$id)->where('enable',1)->orderBy('name','asc')->get();
        return response()->json($menu);
    }
}
