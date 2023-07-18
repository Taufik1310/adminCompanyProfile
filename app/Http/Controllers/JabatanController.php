<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = DB::table('tb_jabatan')->get();
        return view('masterData.jabatan.index', [
            'jabatan' => $jabatan,
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
        return view('masterData.jabatan.create', [
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
            DB::table('tb_jabatan')->insert([
                "id_jabatan" => $request->id_jabatan,
                "nama_jabatan" => $request->nama_jabatan,
            ]);
            return redirect('jabatan')->with('success', "Jabatan Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('jabatan')->with('failed', "Jabatan Gagal Ditambahkan");
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
        $jabatan = DB::table('tb_jabatan')->get();
        return view('masterData.jabatan.print', [
            'jabatan' => $jabatan,
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
        $jabatan = DB::table('tb_jabatan')->where('id_jabatan', $id)->first();
        return view('masterData.jabatan.edit', [
            'jabatan' => $jabatan,
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
            DB::table('tb_jabatan')->where('id_jabatan', $id)->update([
                "nama_jabatan" => $request->nama_jabatan,
            ]);
            return redirect('jabatan')->with('success', "Jabatan Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('jabatan')->with('failed', "Jabatan Gagal Diubah");
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
            DB::table('tb_jabatan')->where('id_jabatan', $id)->delete();
            return redirect('jabatan')->with('success', "Jabatan Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('jabatan')->with('failed', "Jabatan Gagal Dihapus");
        }
    }

    public function print() {
        $jabatan = DB::table('tb_jabatan');
        return view('masterData.jabatan.print', [
            'jabatan' => $jabatan,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
