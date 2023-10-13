<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       DB::table('mahasiswa')->insert([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'kota' => $request->kota,
       ]);    
       return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa=DB::table('mahasiswa')->where('id', $id)->get();
        return view('edit', ['mahasiswa' =>$mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kota' => $request->kota
            ]);
            return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('mahasiswa')->where('id',$id)->delete();
        return redirect('/mahasiswa');
    }
}
