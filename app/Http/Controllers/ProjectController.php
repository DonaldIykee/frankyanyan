<?php

namespace App\Http\Controllers;

use App\adminCategory;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
        $slug = Str::slug($data['title']) . Carbon::now()->timestamp;

        $project = new Project([
            'image' => $imageName,
            'description' => $data['description'],
            'category_id' => $data['category'],
            'title' => $data['title'],
            'slug' => $slug,
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
            'title' => [
                'required',
                Rule::unique('projects', 'title')->ignore($id)
            ],
            'image' => 'image|required',
            'description' => 'string|required',
            'category' => 'string|required:categories, id'
        ]);

        $imageName = $request->file('image')->store('projectImg');
        $slug = Str::slug($data['title']) . Carbon::now()->timestamp;

        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->image = $imageName;
        $project->category_id = $data['category'];
        $project->slug = $slug;

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