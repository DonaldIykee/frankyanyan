<?php

namespace App\Http\Controllers;

use App\teamMember;
use Illuminate\Http\Request;

class adminTeamMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = teamMember::all();

        return view('admin.teamMember.index', compact('members'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamMember.create');
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
            'name' => 'string|required',
            'position' => 'string|required',
            'image' => 'required|image'
        ]);

        $imageName = $request->file('image')->store('memberImg');

        $teamMembers = new teamMember([
            'name' => $data['name'],
            'position' => $data['position'],
            'image' => $imageName
        ]);

        $teamMembers->save();

        return redirect()->back()->with('message', ' A member added successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function show(teamMember $teamMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = teamMember::findOrFail($id);

        return view('admin.teamMember.edit', compact('member'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = teamMember::findOrFail($id);

        $data = $request->validate([
            'name' => 'string|required',
            'position' => 'string|required',
            'image' => 'image|required'
        ]);

        $imageName = $request->file('image')->store('team');

        $member->name = $data['name'];
        $member->position = $data['position'];
        $member->image = $imageName;

        $member->save();

        return back()->with('message', 'Team member updated successfully.');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(teamMember $teamMember)
    {
        //
    }
}