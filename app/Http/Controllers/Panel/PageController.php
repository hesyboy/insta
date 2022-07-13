<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $categories=InstagramPageCategory::all();
        return view('panel.page.advertise.index');
    }
}
