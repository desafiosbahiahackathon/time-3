<?php

namespace App\Http\Controllers;

use App\Aggressor;
use Illuminate\Http\Request;

class AggressorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aggressors = Aggressor::paginate(20);

        return view('aggressor.index')->with('aggressors', $aggressors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aggressor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Aggressor::create($request->all())) {
            return redirect()
                ->back()
                ->withSuccess('Agressor criado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aggressor  $aggressor
     * @return \Illuminate\Http\Response
     */
    public function show(Aggressor $aggressor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aggressor  $aggressor
     * @return \Illuminate\Http\Response
     */
    public function edit(Aggressor $aggressor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aggressor  $aggressor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aggressor $aggressor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aggressor  $aggressor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aggressor $aggressor)
    {
        //
    }
}
