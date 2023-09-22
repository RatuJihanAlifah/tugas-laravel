<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = DB::table('bukus')->get();
        return view('buku.databuku', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=> 'required',
            'kode_buku' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok_buku' => 'required',
        ]);

        $query = DB::table('bukus')->insert([
            'id'=> $request['id'],
            'kode_buku'=> $request['kode_buku'],
            'judul'=> $request['judul'],
            'penulis'=> $request['penulis'],
            'penerbit'=> $request['penerbit'],
            'tahun_terbit'=> $request['tahun_terbit'],
            'stok_buku'=> $request['stok_buku'],
        ]);
        return redirect('/buku');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $buku = DB::table('bukus')->where('id', $id)->get();
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $buku = DB::table('bukus')->where('id', $id)->get();
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok_buku' => 'required',
        ]);


        $query = DB::table('bukus')->where('id', $id)->update([
        //'field yang ada di table' => $request['name yang di kirim dari form]
            'kode_buku'=> $request['kode_buku'],
            'judul'=> $request['judul'],
            'penulis'=> $request['penulis'],
            'penerbit'=> $request['penerbit'],
            'tahun_terbit'=> $request['tahun_terbit'],
            'stok_buku'=> $request['stok_buku'],
        ]);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('bukus')->where('id', $id)->delete();
        return redirect()->route('buku.index');
    }
}
