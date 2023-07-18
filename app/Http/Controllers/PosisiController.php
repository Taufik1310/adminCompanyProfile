<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posisi = DB::table('tb_posisi')
        ->join('tb_departemen', 'tb_posisi.id_departemen', '=', 'tb_departemen.id_departemen')
        ->select('tb_posisi.*', 'tb_departemen.nama_departemen')
        ->get();
        return view('masterData.posisi.index', [
            'posisi' => $posisi,
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
        $departemen = DB::table('tb_departemen')->get();
        return view('masterData.posisi.create', [
            'departemen' => $departemen,
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
            DB::table('tb_posisi')->insert([
                "id_posisi" => $request->id_posisi,
                "nama_posisi" => $request->nama_posisi,
                "id_departemen" => $request->id_departemen,
            ]);
            return redirect('posisi')->with('success', "Posisi Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('posisi')->with('failed', "Posisi Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posisi = DB::table('tb_posisi')
        ->join('tb_departemen', 'tb_posisi.id_departemen', '=', 'tb_departemen.id_departemen')
        ->select('tb_posisi.*', 'tb_departemen.nama_departemen')
        ->get();
        return view('masterData.posisi.print', [
            'posisi' => $posisi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posisi = DB::table('tb_posisi')->where('id_posisi', $id)->first();
        $departemen = DB::table('tb_departemen')->get();
        return view('masterData.posisi.edit', [
            'posisi' => $posisi,
            'departemen' => $departemen,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
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
        try {
            DB::table('tb_posisi')->where('id_posisi', $id)->update([
                "nama_posisi" => $request->nama_posisi,
                "id_departemen" => $request->id_departemen,
            ]);
            return redirect('posisi')->with('success', "Posisi Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('posisi')->with('failed', "Posisi Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('tb_posisi')->where('id_posisi', $id)->delete();
            return redirect('posisi')->with('success', "Posisi Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('posisi')->with('failed', "Posisi Gagal Dihapus");
        }
    }

    public function print() {
        $posisi = DB::table('tb_posisi')
        ->join('tb_departemen', 'tb_posisi.id_departemen', '=', 'tb_departemen.id_departemen')
        ->select('tb_posisi.*', 'tb_departemen.nama_departemen')
        ->get();
        return view('masterData.posisi.print', [
            'posisi' => $posisi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
