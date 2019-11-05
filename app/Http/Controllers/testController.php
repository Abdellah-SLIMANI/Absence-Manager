<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function contact($name){
        echo "hello world $name";
    }
}
