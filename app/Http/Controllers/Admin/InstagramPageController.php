<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstagramPageCategory;
use Illuminate\Http\Request;

class InstagramPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.instagram-page.index');
    }




    // Category

    public function categoryIndex(){
        $categories=InstagramPageCategory::all();
        return view('admin.instagram-page.category.index',compact('categories'));
    }

    public function categoryCreate(){
        return view('admin.instagram-page.category.create');
    }

    public function categoryStore(Request $request){
        $validated=$request->validate([
            'title' => 'required',
        ]);
        $category=new InstagramPageCategory();

        $category->title = $request->title;
        $category->seo_title = $request->seo_title;
        $category->seo_description = $request->seo_description;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('admin.instagram-page.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
