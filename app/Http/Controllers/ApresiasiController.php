<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApresiasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apresiasi = DB::table('tb_apresiasi')->get();
        return view('masterData.apresiasi.index', [
            'apresiasi' => $apresiasi,
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
        return view('masterData.apresiasi.create', [
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
            $file->move(public_path('assets/images/apresiasi'), $filename);
            DB::table('tb_apresiasi')->insert([
                "id_apresiasi" => $request->id_apresiasi,
                "nama_apresiasi" => $request->nama_apresiasi,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('apresiasi')->with('success', "Apresiasi Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('apresiasi')->with('failed', "Apresiasi Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\apresiasi  $apresiasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apresiasi = DB::table('tb_apresiasi')->where('id_apresiasi', $id)->first();
        return view('masterData.apresiasi.show', [
            'apresiasi' => $apresiasi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apresiasi  $apresiasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apresiasi = DB::table('tb_apresiasi')->where('id_apresiasi', $id)->first();
        return view('masterData.apresiasi.edit', [
            'apresiasi' => $apresiasi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\apresiasi  $apresiasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $apresiasi = DB::table('tb_apresiasi')->where('id_apresiasi', $id)->first();
            if (file_exists(public_path('assets/images/apresiasi/'.$apresiasi->logo)) && ($request->logo != ""))  {
                unlink(public_path('assets/images/apresiasi/'.$apresiasi->logo));  
            }
            $file = $request->file('logo');
            $filename = ($file === NULL) ? $apresiasi->logo : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/apresiasi'), $filename);
            }
            DB::table('tb_apresiasi')->where('id_apresiasi', $id)->update([
                "nama_apresiasi" => $request->nama_apresiasi,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('apresiasi')->with('success', "Apresiasi Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('apresiasi')->with('failed', "Apresiasi Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apresiasi  $apresiasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $apresiasi = DB::table('tb_apresiasi')->where('id_apresiasi', $id)->first();
            unlink(public_path('assets/images/apresiasi/'.$apresiasi->logo));
            DB::table('tb_apresiasi')->where('id_apresiasi', $id)->delete();
            return redirect('apresiasi')->with('success', "Apresiasi Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('apresiasi')->with('failed', "Apresiasi Gagal Dihapus");
        }
    }

    public function print()
    {
        $apresiasi = DB::table('tb_apresiasi')->get();
        return view('masterData.apresiasi.print', [
            'apresiasi' => $apresiasi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
