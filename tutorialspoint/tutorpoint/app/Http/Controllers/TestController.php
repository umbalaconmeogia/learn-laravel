<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        echo "<br>Test Controller.";
    }

    public function role() {
        echo "<br>TestController#role()";
    }
}
