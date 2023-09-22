<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = DB::table('anggotas')->get();
        return view('anggota.dataanggota', compact('anggotas'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.anggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_anggota' => 'required|unique:anggotas,kode_anggota',
            'nama' => 'required|unique:anggotas,nama',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required|min:5|max:200',
        ]);

        $query = DB::table('anggotas')->insert([
            'kode_anggota'=> $request['kode_anggota'],
            'nama'=> $request['nama'],
            'jenis_kelamin'=> $request['jenis_kelamin'],
            'jurusan'=> $request['jurusan'],
            'no_telepon'=> $request['no_telepon'],
            'alamat'=> $request['alamat'],
        ]);

        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id', $id)->get();
        return view('anggota.showanggota', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id', $id)->get();
        return view('anggota.editanggota', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode_anggota' => 'required|unique:anggotas,kode_anggota',
            'nama' => 'required|unique:anggotas,nama',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required|min:10|max:200',
        ]);


        $query = DB::table('anggotas')->where('id', $id)->update([
        //'field yang ada di table' => $request['name yang di kirim dari form]
            'kode_anggota'=> $request['kode_anggota'],
            'nama'=> $request['nama'],
            'jenis_kelamin'=> $request['jenis_kelamin'],
            'jurusan'=> $request['jurusan'],
            'no_telepon'=> $request['no_telepon'],
            'alamat'=> $request['alamat'],
        ]);
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('anggotas')->where('id', $id)->delete();
        return redirect()->route('anggota.index');
    }
}
