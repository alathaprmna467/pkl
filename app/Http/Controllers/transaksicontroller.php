<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaksi', [
            'transaksi' => transaksi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Id_Trans' => 'required',
            'Date' => 'required',
            'Notes' => 'nullable',
            'Id_Karyawan' => 'required',
            'Berat' => 'required',
            'Id_Pelanggan' => 'required',
            'Id_Jenis' => 'required',
            'Tarif' => 'required',
            'Total' => 'required',
        ]);
        transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $request->validate([
            'Id_Trans' => 'required',
            'Date' => 'required',
            'Notes' => 'nullable',
            'Id_Karyawan' => 'required',
            'Berat' => 'required',
            'Id_Pelanggan' => 'required',
            'Id_Jenis' => 'required',
            'Tarif' => 'required',
            'Total' => 'required',
        ]);
        $transaksi->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
