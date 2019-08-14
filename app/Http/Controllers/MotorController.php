<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

use File;
class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        return view('backend.motor.index', compact('motor'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motor = Motor::all();
        return view('motor.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna = $request->motor_warna;
        $motor->motor_harga = $request->motor_harga;
        if ($request->hasFile('motor_gambar')) {
            $file = $request->file('motor_gambar');
            $path = public_path() .
                '/assets/img/motor/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $motor->motor_gambar = $filename;
        }
        $motor->save();
        return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        return view('motor.edit', compact('motor'));
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
        $motor = Motor::findOrFail($id);
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna = $request->motor_warna;
        $motor->motor_harga = $request->motor_harga;
        $motor->tgl_lahir = $request->tgl_lahir;
        if ($request->hasFile('motor_gambar')) {
            $file = $request->file('motor_gambar');
            $path = public_path() .
                '/assets/img/motor/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $motor->motor_gambar = $filename;
        }
        $motor->save();
        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findOrFail($id);
        $motor->delete();
        return redirect()->route('motor.index');
    }
}
