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
        $departement = Departement::all();

        return view('pages.departement.index', compact('departement'));
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
        $validated = $request->validate([
            'id_dept' => 'required|unique:departements|max:4',
            'id_secd' => 'required|unique:departements|max:3',
            'name' => 'required',

        ]);

        // //
        
        // $request->validate([
        //     'id' => 'required|numeric|unique:departements,id_dept',
        //     'code' => 'required|min:3',
        //     'departement' => 'required|min:25',
        // ]);
        
        $departement = new Departement();
        $departement->id_dept = $request->id_dept;
        $departement->id_secd = $request->id_secd;
        $departement->name = $request->name;
        $departement->save();
        return redirect()->route('departement.index')
            ->with('success', 'Data Berhasil Di Tambahkan');
        
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
        $departement = Departements::findOrFail($id);
        return view('pages.departement.show',compact('deparrement'));
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
        $departement = Departement::findOrFail($id);
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
        $validated = $request->validate([
            'id_dept' => 'required|unique:departements|max:4',
            'id_secd' => 'required|unique:departements|max:3',
            'departements' => 'required',

        ]);

        // //
        
        // $request->validate([
        //     'id' => 'required|numeric|unique:departements,id_dept',
        //     'code' => 'required|min:3',
        //     'departement' => 'required|min:25',
        // ]);
        
        $departement = new Departement();
        $departement->id_dept = $request->id_dept;
        $departement->id_secd = $request->id_secd;
        $departement->name = $request->name;
        $departement->save();
        return redirect()->route('departement.index')
            ->with('success', 'Data Berhasil Di Tambahkan');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        $departement = Departement::findOrFail($id);
        $departement->delete();
        return redirect()->route('departement.index')
            ->with('success', 'Data Berhasil Di Hapus');

        // //
        // $departement->delete();
       
        // return redirect()->route('departement.index')
        //                 ->with('success','Departement deleted successfully'  );
    }
}
