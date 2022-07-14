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

    public function create()
    {
        // $categories=InstagramPageCategory::all();
        return view('panel.page.advertise.create');
    }


}
