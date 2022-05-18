<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Friends;


class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Groups::orderBy('id', 'desc')->paginate(3);

        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the request...
         $request->validate([
            'name' => 'required|unique:groups|max:255',
            'description' => 'required'
        ]);
 
        $friends = new Groups();
 
        $friends->name = $request->name;
        $friends->description = $request->description;
 
        $friends->save();

        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Groups = Groups::where('id', $id)->first();
        return view('Groups.show', ['Groups' => $Groups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Group = Groups::where('id', $id)->first();
        return view('Groups.edit', ['group' => $Group]);
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
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        Groups::find($id)->update([
            'name' => $request->name,
            'description' => $request->description
            
        ]);

        return redirect('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Groups::find($id)->delete();
        return redirect('/groups');
    }
    public function addmember($id)
    {
        $friend = Friends::where('groups_id', '=', NULL)->get();
        $group = Groups::where('id', $id)->first();
        return view('groups.addmember', ['group' => $group, 'friend' => $friend]);
    }
}