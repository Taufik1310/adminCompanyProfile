<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen = DB::table('tb_departemen')->get();
        return view('masterData.departemen.index', [
            'departemen' => $departemen,
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
        return view('masterData.departemen.create', [
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
            DB::table('tb_departemen')->insert([
                "id_departemen" => $request->id_departemen,
                "nama_departemen" => $request->nama_departemen,
            ]);
            return redirect('departemen')->with('success', "Departemen Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('departemen')->with('failed', "Departemen Gagal Ditambahkan");
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
        $departemen = DB::table('tb_departemen')->get();
        return view('masterData.departemen.print', [
            'departemen' => $departemen,
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
        $departemen = DB::table('tb_departemen')->where('id_departemen', $id)->first();
        return view('masterData.departemen.edit', [
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
            DB::table('tb_departemen')->where('id_departemen', $id)->update([
                "nama_departemen" => $request->nama_departemen,
            ]);
            return redirect('departemen')->with('success', "Departemen Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('departemen')->with('failed', "Departemen Gagal Diubah");
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
            DB::table('tb_departemen')->where('id_departemen', $id)->delete();
            return redirect('departemen')->with('success', "Departemen Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('departemen')->with('failed', "Departemen Gagal Dihapus");
        }
    }

    public function print() {
        $departemen = DB::table('tb_departemen');
        return view('masterData.departemen.print', [
            'departemen' => $departemen,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
