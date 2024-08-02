<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function testPost ()
    {
        return response()->json(['first_test' => 'ok'], 201);
    }

    public function testPut()
    {
        return response()->json(['first_test' => 'put']);
    }

    public function testAny()
    {
        return response()->json(['any_method' => 'ok']);
    }

    public function html()
    {
        return response('current string', 404);
    }
}
