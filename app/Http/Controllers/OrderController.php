<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
        return response()->json(Order::all(), 200);
    }


    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'quantity'=>'required|integer'
        ]);

        $orders = Order::Create($validated);
        return response()->json($orders, 201);
    }


    public function show(string $id)
    {
        $orders = Order::find($id);
        if(!$orders){
            return response()->json(['message'=>'order not found'], 404);
        }
        return response()->json($orders, 200);
    }


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'quantity'=>'required|integer'
        ]);
        $orders = Order::find($id);
        if(!$orders){
            return response()->json(['message'=>'order not found!']);
        }
        $orders->update($validated);
        return response()->json($orders, 200);
    }


    public function destroy(string $id)
    {
        $orders = Order::find($id);
        if(!$orders){
            return response()->json(['message'=>'order not found'], 404);
        }
        $orders->delete();
        return response()->json(['message'=>'order delete successfully'], 200);
    }
}
