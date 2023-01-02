<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('index',['tests' =>$tests ]);
    }

    public function add()
    {
        return view('add');
    }

    public function create()
    {
        $form = $request ->all();
        Test::create($form);
        return redirect('/');
    }
}
