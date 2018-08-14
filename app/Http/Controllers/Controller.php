<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('home', ['menu' => 'p', 'item' => 'lorem']);
    }

    public function contact() {
            return view('contact', ['menu' => 'c']);
    }

    public function exhibitions() {
        return view('exhibitions', ['menu' => 'e']);
    }

    public function plf() {
        return view('plf', ['menu' => 'p', 'item' => 'plf']);
    }
}
