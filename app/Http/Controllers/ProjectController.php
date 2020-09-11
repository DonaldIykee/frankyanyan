<?php

namespace App\Http\Controllers;

use App\adminCategory;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all();

        return view('admin.projects.index', compact('projects',));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = adminCategory::all();

        return view('admin.projects.create', compact('categories'));
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
            'image' => 'required|image',
            'title' => 'string|required',
            'description' => 'string|required',
            'category' => 'required|exists:categories,id',
        ]);

        $imageName = $request->file('image')->store('projectImg');

        $project = new Project([
            'image' => $imageName,
            'description' => $data['description'],
            'category_id' => $data['category'],
            'title' => $data['title']
        ]);

        $project->save();

        return redirect()->back()->with('message', 'Add successfully!');
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
        $project = Project::findOrFail($id);
        $categories = adminCategory::all();

        return view('admin.projects.edit', compact('project', 'categories'));
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
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'title' => 'string|required',
            'image' => 'image|required',
            'description' => 'string|required',
            'category' => 'string|required:categories, id'
        ]);

        $imageName = $request->file('image')->store('projectImg');

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->image = $imageName;
        $project->category_id = $data['category'];

        $project->save();

        return back()->with('message', 'Updated successfully');
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