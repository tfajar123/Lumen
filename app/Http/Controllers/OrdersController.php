<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::OrderBy("id", "DESC")->paginate(10);

        $outPut = [
            "message" => "orders",
            "results" => $orders
        ];

        return response()->json($orders, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $order = Order::create($input);

        return response()->json($order, 200);
    }

    public function show($id)
    {
        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }

        return response()->json($order, 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }
        $order->fill($input);
        $order->save();

        return response()->json($order, 200);
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }

        $order->delete();
        $message = ['message' => 'Deleted Successfully', 'Order_id' => $id];

        return response()->json($message, 200);
    }
}