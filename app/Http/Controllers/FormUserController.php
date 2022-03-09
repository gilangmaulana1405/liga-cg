<?php

namespace App\Http\Controllers;

use App\Models\Ligacg;
use Illuminate\Http\Request;

class FormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form-user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('form-user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'employee' => 'required',
            'circle_group' => 'required',
            'jenis_taging' => 'required',
            'point' => 'required|numeric'
        ]);

        Ligacg::create($validatedData);
        return redirect('/form-user')->with('success', 'Data berhasil dikirimkan!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ligacg  $ligacg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ligacg $ligacg)
    {
        //
    }
}
