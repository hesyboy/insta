<?php

namespace App\Http\Controllers\Admin\Instagram\Page;

use App\Http\Controllers\Controller;
use App\Models\InstagramPageCategory;
use Illuminate\Http\Request;

class PageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=InstagramPageCategory::all();
        return view('admin.instagram.page.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instagram.page.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'title' => 'required',
        ]);
        $category=new InstagramPageCategory();

        $category->title = $request->title;
        $category->seo_title = $request->seo_title;
        $category->seo_description = $request->seo_description;
        $category->status = $request->status;


        if($request->hasFile('icon')){
            $iconName = time().'.'.$request->icon->extension();
            $request->icon->storeAs('public/images/instagram/category/', $iconName);
            $category->icon='storage/images/instagram/category/'.$iconName;
        }


        $category->save();

        return redirect()->route('admin.instagram.page.category.index')->with('success','دسته جدید با موفقیت ساخته شد');
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
    public function edit(InstagramPageCategory $instagramPageCategory)
    {
        return view('admin.instagram.page.category.edit',compact('instagramPageCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstagramPageCategory $instagramPageCategory)
    {
        $validated=$request->validate([
            'title' => 'required',
        ]);

        $instagramPageCategory->title = $request->title;
        $instagramPageCategory->seo_title = $request->seo_title;
        $instagramPageCategory->seo_description = $request->seo_description;
        $instagramPageCategory->status = $request->status;


        if($request->hasFile('icon')){
            $iconName = time().'.'.$request->icon->extension();
            $request->icon->storeAs('public/images/instagram/category/', $iconName);
            $instagramPageCategory->icon='storage/images/instagram/category/'.$iconName;
        }


        $instagramPageCategory->save();

        return redirect()->route('admin.instagram.page.category.index')->with('update','دسته با موفقیت آپدیت شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstagramPageCategory $instagramPageCategory)
    {
        $instagramPageCategory->delete();
        return redirect()->route('admin.instagram.page.category.index')->with('delete','دسته با موفقیت حدف شد');
    }
}
