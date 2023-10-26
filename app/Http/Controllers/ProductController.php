<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        return "Lumen Controller";
    }
    public function index()
    {
        $products = Product::OrderBy("id", "DESC")->paginate(10);

        $outPut = [
            "message" => "product",
            "results" => $products
        ];

        return response()->json($products, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $product = Product::create($input);

        return response()->json($product, 200);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        return response()->json($product, 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }
        $product->fill($input);
        $product->save();

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $product->delete();
        $message = ['message' => 'Deleted Successfully', 'Product_id' => $id];

        return response()->json($message, 200);
    }
}
