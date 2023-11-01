<?php

namespace App\Http\Controllers;

use\App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rak = DB::table('raks')->get();
        return view('rak.datarak', compact('rak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rak.rak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
        ]);

        $query = DB::table('raks')->insert([
            'nama'=> $request['nama'],
            'lokasi'=> $request['lokasi'],
        ]);
        return redirect('/rak');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rak = DB::table('raks')->where('id', $id)->get();
        return view('rak.show', compact('rak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rak = DB::table('raks')->where('id', $id)->get();
        return view('rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
        ]);


        $query = DB::table('raks')->where('id', $id)->update([
        //'field yang ada di table' => $request['name yang di kirim dari form]
            'nama'=> $request['nama'],
            'lokasi'=> $request['lokasi'],
        ]);
        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('raks')->where('id', $id)->delete();
        return redirect()->route('rak.index');
    }
}
