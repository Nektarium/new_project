<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
    }
}