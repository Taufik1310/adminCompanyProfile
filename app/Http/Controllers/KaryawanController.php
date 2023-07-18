<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = DB::table('tb_karyawan')
        ->join('tb_posisi', 'tb_karyawan.id_posisi', '=', 'tb_posisi.id_posisi')
        ->select('tb_karyawan.*', 'tb_posisi.nama_posisi')
        ->get();
        return view('stakeholder.karyawan.index', [
            'karyawan' => $karyawan,
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
        $posisi = DB::table('tb_posisi')->get();
        return view('stakeholder.karyawan.create', [
            'posisi' => $posisi,
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
            DB::table('tb_karyawan')->insert([
                "id_karyawan" => $request->id_karyawan,
                "nama_lengkap" => $request->nama_lengkap,
                "id_posisi" => $request->id_posisi,
                "gaji" => $request->gaji,
                "status" => $request->status,
                "tgl_bergabung" => $request->tgl_bergabung,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('karyawan')->with('success', "Karyawan Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('karyawan')->with('failed', "Karyawan Gagal Ditambahkan");
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
        $karyawan = DB::table('tb_karyawan')
        ->where('id_karyawan', $id)
        ->join('tb_posisi', 'tb_karyawan.id_posisi', '=', 'tb_posisi.id_posisi')
        ->select('tb_karyawan.*', 'tb_posisi.nama_posisi')
        ->first();
        return view('stakeholder.karyawan.show', [
            'karyawan' => $karyawan,
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
        $karyawan = DB::table('tb_karyawan')->where('id_karyawan', $id)->first();
        $posisi = DB::table('tb_posisi')->get();
        return view('stakeholder.karyawan.edit', [
            'karyawan' => $karyawan,
            'posisi' => $posisi,
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
            DB::table('tb_karyawan')->where('id_karyawan', $id)->update([
                "nama_lengkap" => $request->nama_lengkap,
                "id_posisi" => $request->id_posisi,
                "gaji" => $request->gaji,
                "status" => $request->status,
                "tgl_bergabung" => $request->tgl_bergabung,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('karyawan')->with('success', "Karyawan Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('karyawan')->with('failed', "Karyawan Gagal Diubah");
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
            DB::table('tb_karyawan')->where('id_karyawan', $id)->delete();
            return redirect('karyawan')->with('success', "Karyawan Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('karyawan')->with('failed', "Karyawan Gagal Dihapus");
        }
    }

    public function print() {
        $karyawan = DB::table('tb_karyawan')
        ->join('tb_posisi', 'tb_karyawan.id_posisi', '=', 'tb_posisi.id_posisi')
        ->select('tb_karyawan.*', 'tb_posisi.nama_posisi')
        ->get();
        return view('stakeholder.karyawan.print', [
            'karyawan' => $karyawan,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
