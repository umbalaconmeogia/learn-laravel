<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        echo "<br>TestController#index()";
    }

    public function role() {
        echo "<br>TestController#role()";
    }
}
