<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    // public function index(){
    //     return "Test Berhasil";
    // }
    
    // public function urutan($ke){

    //     $friends = Friends::paginate(2);

    //     return view('friend', compact('friends'));
    // }

    // public function coba($ke){
    //     return view('coba', ['ke' => $ke]);
    // }

    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->paginate(3);

        return view('Friends.index', compact('friends'));
    }
    
    public function create()
    {
        return view('Friends.create');
    }
    
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required'
        ]);
 
        $friends = new Friends();
 
        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_tlp;
        $friends->alamat = $request->alamat;
 
        $friends->save();

        return redirect('/');
    }
    
    public function show($id){
        
        $friend = Friends::where('id', $id)->first();
        return view('Friends.show', ['friend' => $friend]);

    }
   
    public function edit($id){
        
        $friend = Friends::where('id', $id)->first();
        return view('Friends.edit', ['friend' => $friend]);

    }
    
    public function update(Request $request , $id){

        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required'
        ]);

        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_tlp,
            'alamat' => $request->alamat
            
        ]);

        return redirect('/');

    }

    public function destroy($id){
        Friends::find($id)->delete();
        return redirect('/');
    }


}