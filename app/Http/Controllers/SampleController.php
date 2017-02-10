<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index() {return view('index'); }
    public function about() {return view('about'); }
    public function welcome() {return view('welcome'); }
}
?>
