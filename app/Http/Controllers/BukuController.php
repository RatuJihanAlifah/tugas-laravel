<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
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
    public function create(Rak $rak)
    {
        $raks = $rak->all();
        return view('buku.buku', compact('raks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku)
    {
        $request->validate([
            'id'           => 'required',
            'kode_buku'    => 'required',
            'rak'          => 'required',
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'cover'        => 'required',
            'tahun_terbit' => 'required',
            'stok_buku'    => 'required',
        ]);

        $image = $request->file('poster');
        $result = CloudinaryStorage::upload($image->getRealPath(),
        $image->getClientOriginalName());

        $buku::create([
            'id'          => $request['id'],
            'kode_buku'   => $request['kode_buku'],
            'rak_id'      => $request['rak'],
            'judul'       => $request['judul'],
            'penulis'     => $request['penulis'],
            'penerbit'    => $request['penerbit'],
            'tahun_terbit'=> $request['tahun_terbit'],
            'stok_buku'   => $request['stok_buku'],
            'cover'       => $result,
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
            'rak_id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok_buku' => 'required',
        ]);


        $query = DB::table('bukus')->where('id', $id)->update([
        //'field yang ada di table' => $request['name yang di kirim dari form]
            'kode_buku'=> $request['kode_buku'],
            'rak_id'=> $request['rak_id'],
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
