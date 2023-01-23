<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        {
            //menampilkan semua data dari model Siswa
            $location = Location::all();
            return view('pages.location.index', compact('location'));
            //
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.location.create');
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
        $validated = $request->validate([
            'id_loc' => 'required|unique:locations|max:4',
            'id_secl' => 'required|unique:locations|max:3',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $location = new Location();
        $location->id_loc = $request->id_loc;
        $location->id_secl = $request->id_secl;
        $location->name = $request->name;
        $location->address = $request->address;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->country = $request->country;
        $location->save();
        return redirect()->route('location.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('pages.location.show', compact('location'));
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
        $location = Location::findOrFail($id);
        return view('pages.location.edit', compact('location'));
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
        $validated = $request->validate([
            'id_loc' => 'required|unique:locations|max:4',
            'id_secl' => 'required|unique:locations|max:3',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $location = new Location();
        $location->id_loc = $request->id_loc;
        $location->id_secl = $request->id_secl;
        $location->name = $request->name;
        $location->address = $request->address;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->country = $request->country;
        $location->save();
        return redirect()->route('location.index')
            ->with('success', 'Data berhasil diedit!');
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
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->route('location.index')
            ->with('success', 'Data berhasil dihapus!');
        //
    }
}
