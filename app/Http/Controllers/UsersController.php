<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller{
    public function __construct()
    {
        return "Lumen Controller";
    }
    public function index()
    {
        return "Anda mendapatkan response ini dari <b>Controller</b>";
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $user = User::create($input);

        return response()->json($user, 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if(!$user) {
            abort(404);
        }

        return response()->json($user, 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        if(!$user) {
            abort(404);
        }
        $user->fill($input);
        $user->save();

        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if(!$user) {
            abort(404);
        }

        $user->delete();
        $message = ['message' => 'Deleted Successfully', 'user_id' => $id];

        return response()->json($message, 200);
    }
}