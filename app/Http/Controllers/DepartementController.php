<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;


class DepartementController extends Controller
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
        $departements = Departement::orderBy('id_dept','desc');

        return view('pages.departement.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.departement.create');
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
        $request->validate([
            'id' => 'required|numeric|unique:departements,id_dept',
            'code' => 'required|min:3',
            'departement' => 'required|min:25',
        ]);
        Departement::create($request->all());

        return redirect()->route('departement.index')
                        ->with('success','Departement has Created done');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //
        return view('pages.departement.show',compact('deparrement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        //
        return view('pages.departement.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        //
        $request->validate([
            'id' => 'required|numeric|unique:departements,id_dept',
            'code' => 'required|min:3',
            'departement' => 'required|min:25',
        ]);
      
        $departement->update($request->all());
      
        return redirect()->route('departement.index')
                        ->with('success','Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        //
        $departement->delete();
       
        return redirect()->route('departement.index')
                        ->with('success','Departement deleted successfully');
    }
}
