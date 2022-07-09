<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function explore(){
        return view('site.explore');
    }

    public function product(){
        return view('site.product');
    }
}
