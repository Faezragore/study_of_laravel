<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function testView() {
        //return view('test', ['a' => 'hello', 'b' => 25]);
        /*return view('test')
            ->with('a', 'hello')
            ->with('b', 'world');
        */
        //return View::make('test', ['a' => 'hello', 'b' => 25]);
        //return View::exists('test');
        return view('test', ['a' => 'hello', 'b' => 25]); 
    }
}
