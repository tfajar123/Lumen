<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::OrderBy("id", "DESC")->paginate(10);

        $outPut = [
            "message" => "reviews",
            "results" => $reviews
        ];

        return response()->json($reviews, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $review = Review::create($input);

        return response()->json($review, 200);
    }

    public function show($id)
    {
        $review = Review::find($id);

        if(!$review) {
            abort(404);
        }

        return response()->json($review, 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $review = Review::find($id);

        if(!$review) {
            abort(404);
        }
        $review->fill($input);
        $review->save();

        return response()->json($review, 200);
    }

    public function destroy($id)
    {
        $review = Review::find($id);

        if(!$review) {
            abort(404);
        }

        $review->delete();
        $message = ['message' => 'Deleted Successfully', 'Review_id' => $id];

        return response()->json($message, 200);
    }
}