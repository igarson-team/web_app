<?php

namespace App\Http\Controllers;

use App\Http\Resources\orderCollection;
use App\order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class orderController extends Controller
{
    public function store(Request $request){

//        return response()->json($request->get("name"));
        try {
            $order = new order([
                "name" => $request->get("name"),
                "number" => $request->get("number")
            ]);
            $order->save();
        }catch (\Exception $e){
            return response()->json($e);
        }
        return response()->json($order);
    }
    public function index(){
        return new orderCollection(order::all());
    }
    public function edit($id){
//        return response()->json(id)
        $order = order::find($id);
        return response()->json($order);
    }
    public function update($id , Request $request){
        $order = order::find($id);
        $order->update($request->all());
        return response()->json("successfully updated");
    }
    public function delete ($id){
        $order = order::find($id);
        $order->delete();
        return response()->json("successfully deleted");
    }
}
