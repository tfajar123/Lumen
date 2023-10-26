<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::OrderBy("id", "DESC")->paginate(10);

        $outPut = [
            "message" => "categories",
            "results" => $categories
        ];

        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $category = Category::create($input);

        return response()->json($category, 200);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if(!$category) {
            abort(404);
        }

        return response()->json($category, 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $category = Category::find($id);

        if(!$category) {
            abort(404);
        }
        $category->fill($input);
        $category->save();

        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if(!$category) {
            abort(404);
        }

        $category->delete();
        $message = ['message' => 'Deleted Successfully', 'Category_id' => $id];

        return response()->json($message, 200);
    }
}