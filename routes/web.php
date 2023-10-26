<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return response()->json([
        "service_name" => "PHP Service App",
        "status" => "Running"
    ]);
});
$router->get('/hello-lumen', function(){
    return "<h1>Lumen</h1><p>Hi Good Developer, thankyou for using Lumen</p>";
});
$router->get('/hello-lumen/{name}', function($name){
    return "<h1>Lumen</h1><p>Hi ". $name .", thankyou for using Lumen</p>";
});
$router->get('/scores', ['middleware' => 'login', function (){
    return "<h1>Selamat</h1><p>Nilai anda 100</p>";
}]);
$router->get('/halaman-terlindung', ['middleware' => 'auth', function () {
    return "Anda hanya bisa mengakses halaman ini jika Anda terotentikasi.";
}]);
//Posts
$router->get('/posts', 'PostsController@index');
$router->post('/posts', 'PostsController@store');
$router->get('/post/{id}', 'PostsController@show');
$router->put('/post/{id}', 'PostsController@update');
$router->delete('/post/{id}', 'PostsController@destroy');

$router->get('/users', 'UsersController@index');
$router->post('/users', 'UsersController@store');
$router->get('/user/{id}', 'UsersController@show');
$router->put('/user/{id}', 'UsersController@update');
$router->delete('/user/{id}', 'UsersController@destroy');

$router->get('/products', 'ProductController@index');
$router->post('/products', 'ProductController@store');
$router->get('/product/{id}', 'ProductController@show');
$router->put('/product/{id}', 'ProductController@update');
$router->delete('/product/{id}', 'ProductController@destroy');

$router->get('/orders', 'OrdersController@index');
$router->post('/orders', 'OrdersController@store');
$router->get('/order/{id}', 'OrdersController@show');
$router->put('/order/{id}', 'OrdersController@update');
$router->delete('/order/{id}', 'OrdersController@destroy');

$router->get('/categories', 'CategoriesController@index');
$router->post('/categories', 'CategoriesController@store');
$router->get('/category/{id}', 'CategoriesController@show');
$router->put('/category/{id}', 'CategoriesController@update');
$router->delete('/category/{id}', 'CategoriesController@destroy');

$router->get('/reviews', 'ReviewsController@index');
$router->post('/reviews', 'ReviewsController@store');
$router->get('/review/{id}', 'ReviewsController@show');
$router->put('/review/{id}', 'ReviewsController@update');
$router->delete('/review/{id}', 'ReviewsController@destroy');

/*$router->get('home', 'HomeController@index');
$router->get('login', 'AuthController@index');*/


/*$router->get('/users', function () {
    $data = [
        [
            "id" => 1,
            "name" => "Sumatrana",
            "email" => "sumatrana@gmail.com",
            "address" => "Padang",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 2,
            "name" => "Jawarianto",
            "email" => "jawarianto@gmail.com",
            "address" => "Cimahi",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 3,
            "name" => "Kalimantanio",
            "email" => "kalimantanio@gmail.com",
            "address" => "Samarinda",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 4,
            "name" => "Sulawesiani",
            "email" => "sulawesiani@gmail.com",
            "address" => "Makasar",
            "gender" => "Perempuan"
        ],
        [
            "id" => 5,
            "name" => "Papuani",
            "email" => "papuani@gmail.com",
            "address" => "Jayapura",
            "gender" => "Perempuan"
        ]
    ];

    return response()->json($data);
});
$router->get('/users/{userId}', function ($userId) {
    $userData = [
        [
            "id" => 1,
            "name" => "Sumatrana",
            "email" => "sumatrana@gmail.com",
            "address" => "Padang",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 2,
            "name" => "Jawarianto",
            "email" => "jawarianto@gmail.com",
            "address" => "Cimahi",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 3,
            "name" => "Kalimantanio",
            "email" => "kalimantanio@gmail.com",
            "address" => "Samarinda",
            "gender" => "Laki-laki"
        ],
        [
            "id" => 4,
            "name" => "Sulawesiani",
            "email" => "sulawesiani@gmail.com",
            "address" => "Makasar",
            "gender" => "Perempuan"
        ],
        [
            "id" => 5,
            "name" => "Papuani",
            "email" => "papuani@gmail.com",
            "address" => "Jayapura",
            "gender" => "Perempuan"
        ]
    ];

    $user = null;

    foreach ($userData as $userDataItem) {
        if ($userDataItem["id"] == $userId) {
            $user = $userDataItem;
            break;
        }
    }

    if ($user) {
        return response()->json($user);
    } else {
        return response()->json(['message' => 'User not found'], 404);
    }
});*/
