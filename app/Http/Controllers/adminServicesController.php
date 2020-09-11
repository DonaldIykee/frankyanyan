<?php

namespace App\Http\Controllers;

use App\services;
use App\adminCategory;
use Illuminate\Http\Request;

class adminServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = services::all();

        return view('admin.services.index', compact('services'));
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

        return view('admin.services.create', compact('categories'));
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
            'description' => 'string|required',
            'category' => 'required|exists:categories,id',
        ]);

        $imageName = $request->file('image')->store('servicesImage');

        $services = new services([
            'image' => $imageName,
            'description' => $data['description'],
            'category_id' => $data['category'],
        ]);

        $services->save();

        return redirect()->back()->with('message', 'Add successfully!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services, $id)
    {
        $service = services::findOrFail($id);

        return view('admin.services.edit', compact('service'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, services $services, $id)
    {
        $service = services::findOrFail($id);

        $data = $request->validate([
            'description' => 'string|required',
            'image' => 'image|required'
        ]);

        $imageName = $request->file('image')->store('services');

        $service->description = $data['description'];
        $service->image = $imageName;

        $service->save();

        return back()->with('message', 'Serviices updated successfully.');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(services $services)
    {
        //
    }
}