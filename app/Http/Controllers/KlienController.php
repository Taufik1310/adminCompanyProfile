<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klien = DB::table('tb_klien')->get();
        return view('masterData.klien.index', [
            'klien' => $klien,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterData.klien.create', [
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('assets/images/klien'), $filename);
            DB::table('tb_klien')->insert([
                "id_klien" => $request->id_klien,
                "nama_klien" => $request->nama_klien,
                "logo" => $filename,
            ]);
            return redirect('klien')->with('success', "Klien Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('klien')->with('failed', "Klien Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $klien = DB::table('tb_klien')->get();
        return view('masterData.klien.print', [
            'klien' => $klien,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klien = DB::table('tb_klien')->where('id_klien', $id)->first();
        return view('masterData.klien.edit', [
            'klien' => $klien,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $klien = DB::table('tb_klien')->where('id_klien', $id)->first();
            if (file_exists(public_path('assets/images/klien/'.$klien->logo)) && ($request->logo != ""))  {
                unlink(public_path('assets/images/klien/'.$klien->logo));  
            }
            $file = $request->file('logo');
            $filename = ($file === NULL) ? $klien->logo : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/klien'), $filename);
            }
            DB::table('tb_klien')->where('id_klien', $id)->update([
                "nama_klien" => $request->nama_klien,
                "logo" => $filename,
            ]);
            return redirect('klien')->with('success', "Klien Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('klien')->with('failed', "Klien Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $klien = DB::table('tb_klien')->where('id_klien', $id)->first();
            unlink(public_path('assets/images/klien/'.$klien->logo));
            DB::table('tb_klien')->where('id_klien', $id)->delete();
            return redirect('klien')->with('success', "Klien Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('klien')->with('failed', "Klien Gagal Dihapus");
        }
    }
}
