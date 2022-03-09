<?php

namespace App\Http\Controllers;

use App\Models\Ligacg;
use Illuminate\Http\Request;

class LigacgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dashboard.ligacg.index', [
            'data_ligacg' => Ligacg::all()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ligacg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data dalam field
        $validatedData = $request->validate([
            'employee' => 'required',
            'circle_group' => 'required',
            'jenis_taging' => 'required',
            'point' => 'required|numeric'
        ]);

        Ligacg::create($validatedData);

        // redirect ke halaman dashboard 
        return redirect('/dashboard/ligacg')->with('success', 'New data has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ligacg  $ligacg
     * @return \Illuminate\Http\Response
     */
    public function show(Ligacg $ligacg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ligacg  $ligacg
     * @return \Illuminate\Http\Response
     */
    public function edit(Ligacg $ligacg)
    {
        return view('dashboard.ligacg.edit', [
            'ligacg' => $ligacg,
            'data_ligacg' => Ligacg::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ligacg  $ligacg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ligacg $ligacg)
    {
        $validatedData = $request->validate([
            'employee' => 'required',
            'circle_group' => 'required',
            'jenis_taging' => 'required',
            'point' => 'required|numeric'
        ]);

        // update data berdasarkan id
        Ligacg::where('id', $ligacg->id)->update($validatedData);
        return redirect('/dashboard/ligacg')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ligacg  $ligacg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ligacg $ligacg)
    {
        Ligacg::destroy($ligacg->id);
        return redirect('/dashboard/ligacg')->with('success', 'Data has been deleted!');
    }
}
