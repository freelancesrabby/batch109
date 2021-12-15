<?php

namespace App\Http\Controllers\MyTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return view('TestPricing');
    }
}
