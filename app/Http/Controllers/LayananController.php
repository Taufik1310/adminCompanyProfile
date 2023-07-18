<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = DB::table('tb_layanan')->get();
        return view('masterData.layanan.index', [
            'layanan' => $layanan,
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
        return view('masterData.layanan.create', [
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
            DB::table('tb_layanan')->insert([
                "id_layanan" => $request->id_layanan,
                "nama_layanan" => $request->nama_layanan,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('layanan')->with('success', "Layanan Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('layanan')->with('failed', "Layanan Gagal Ditambahkan");
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
        $layanan = DB::table('tb_layanan')->where('id_layanan', $id)->first();
        return view('masterData.layanan.show', [
            'layanan' => $layanan,
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
        $layanan = DB::table('tb_layanan')->where('id_layanan', $id)->first();
        return view('masterData.layanan.edit', [
            'layanan' => $layanan,
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
            DB::table('tb_layanan')->where('id_layanan', $id)->update([
                "nama_layanan" => $request->nama_layanan,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('layanan')->with('success', "Layanan Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('layanan')->with('failed', "Layanan Gagal Diubah");
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
            DB::table('tb_layanan')->where('id_layanan', $id)->delete();
            return redirect('layanan')->with('success', "layanan Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('layanan')->with('failed', "layanan Gagal Dihapus");
        }
    }

    public function print() {
        $layanan = DB::table('tb_layanan')->get();
        return view('masterData.layanan.print', [
            'layanan' => $layanan,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
