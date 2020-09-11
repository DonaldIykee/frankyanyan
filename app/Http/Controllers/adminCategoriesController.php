<?php

namespace App\Http\Controllers;

use App\adminCategory;
use Illuminate\Http\Request;
// use App\Controllers\Rule;

class adminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = adminCategory::all();

        return view('admin.category.index', compact('categories'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");
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
        $data = $request->validate([
            'category_name' => 'string|required',
            'image' => 'image|required'

        ]);

        $imageName = $request->file('image')->store('category_images');

        $category = new adminCategory([
            'category_name' => $data['category_name'],
            'image' => $imageName
        ]);

        $category->save();

        return redirect()->back()->with('message', 'category added successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adminCategory  $adminCategory
     * @return \Illuminate\Http\Response
     */
    public function show(adminCategory $adminCategory, $id)
    {
        $category = adminCategory::findOrFail($id);

        return view('admin.category.show', compact('category'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adminCategory  $adminCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(adminCategory $adminCategory, $id)
    {
        $category = adminCategory::findOrFail($id);

        return view('admin.category.edit', compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adminCategory  $adminCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminCategory $adminCategory, $id)
    {
        $category = adminCategory::findOrFail($id);

        $data = $request->validate([
            'category_name' => 'string|required',
            'image' => 'required|image'
        ]);
        $imageName = $request->file('image')->store('category_images');

        // $category = new adminCategory([
        //     'category_name' => $data['category_name'],
        //     'image' => $imageName
        // ]);
        $category->category_name = $data['category_name'];
        $category->image = $imageName;

        $category->save();

        //return $request->all();
        return back()->with('message', 'Category updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adminCategory  $adminCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminCategory $adminCategory, $id)
    {
        $category = adminCategory::findOrFail($id);

        $category->delete();
        return redirect()->back();
        //
    }
}