<?php

namespace App\Http\Controllers;

use App\Models\jenis_barang;
use Illuminate\Http\Request;

class jenis_barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenis_barang', [
            'jenis_barang' => jenis_barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_barang_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Id_Jenis' => 'required',
            'Nama_Barang' => 'required',
            'Tarif' => 'required',
        ]);
        jenis_barang::create($request->all());
        return redirect()->route('jenis_barang.index')->with('success', 'Data jenis barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(jenis_barang $jenis_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenis_barang $jenis_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jenis_barang $jenis_barang)
    {
        $request->validate([
            'Id_Jenis' => 'required',
            'Nama_Barang' => 'required',
            'Tarif' => 'required',
        ]);
        $jenis_barang->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenis_barang $jenis_barang)
    {
        $jenis_barang->delete();
        return redirect()->route('jenis_barang.index');
    }
}
