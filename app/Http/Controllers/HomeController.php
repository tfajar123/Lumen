<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        return "Lumen Controller";
    }
    public function index()
    {
        return "Ini adalah Halaman Home";
    }
}
