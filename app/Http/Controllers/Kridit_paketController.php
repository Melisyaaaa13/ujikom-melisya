<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kridit_paket;
class Kridit_paketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kridit_paket = Kridit_paket::all();
        return view('kridit_paket.index', compact('kridit_paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kridit_paket = Kridit_paket::all();
        return view('kridit_paket.create', compact('kridit_paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->no_ktp = $request->no_ktp;
        $pembeli->nama = $request->nama;
        $pembeli->alamat = $request->alamat;
        $pembeli->telepon = $request->telepon;
        $pembeli->hp = $request->hp;
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
