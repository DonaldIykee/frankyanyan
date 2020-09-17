<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;
use App\adminProduct;
use App\Project;
use App\Contact;
use App\services;
use App\teamMember;

// use Illuminate\Support\Str;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = adminProduct::latest()->first()->paginate(4);

        $projects = Project::all();

        return view('includes.public.index', compact('products', 'projects'));
        //
    }

    public function products()
    {
        $products = adminProduct::paginate(28);

        return view('includes.public.produ', compact('products'));
    }

    public function projects()
    {
        $projects = Project::all();

        return view('includes.public.projects', compact('projects'));
    }

    public function services()
    {
        $services = services::all();

        return view('includes.public.services', compact('services'));
    }

    public function about()
    {
        return view('includes.public.about');
    }

    public function contact()
    {
        return view('includes.public.contact');
    }

    public function address(Request $request)
    {
        $data = $request->validate([
            'fName' => 'string|required',
            'lName' => 'string|required',
            'lSender' => 'string|required',
            'lPhone' => 'string|required',
            'lMessage' => 'string|required',
            'lSubject' => 'string|required',
        ]);
        $contact = new Contact([

            'fName' => $data['fName'],
            'lName' => $data['lName'],
            'lSender' => $data['lSender'],
            'lPhone' => $data['lPhone'],
            'lMessage' => $data['lMessage'],
            'lSubject' => $data['lSubject'],
        ]);

        $contact->save();

        return back()->with('message', 'Thank You for Contacting us');
    }

    public function team()
    {
        $teams = teamMember::all();

        return view('includes.public.team', compact('teams'));
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
        $product = adminProduct::findOrFail($id);

        return view('includes.public.productSing', compact('product'));
        //
    }

    public function project($id)
    {

        $project = Project::findOrFail($id);

        return view('includes.public.portifolio', compact('project'));
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