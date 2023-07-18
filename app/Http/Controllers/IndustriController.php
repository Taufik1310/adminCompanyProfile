<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industri = DB::table('tb_industri')->get();
        return view('masterData.industri.index', [
            'industri' => $industri,
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
        return view('masterData.industri.create', [
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
            DB::table('tb_industri')->insert([
                "id_industri" => $request->id_industri,
                "nama_industri" => $request->nama_industri,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('industri')->with('success', "Industri Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('industri')->with('failed', "Industri Gagal Ditambahkan");
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
        $industri = DB::table('tb_industri')->where('id_industri', $id)->first();
        return view('masterData.industri.show', [
            'industri' => $industri,
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
        $industri = DB::table('tb_industri')->where('id_industri', $id)->first();
        return view('masterData.industri.edit', [
            'industri' => $industri,
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
            DB::table('tb_industri')->where('id_industri', $id)->update([
                "nama_industri" => $request->nama_industri,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('industri')->with('success', "Industri Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('industri')->with('failed', "Industri Gagal Diubah");
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
            DB::table('tb_industri')->where('id_industri', $id)->delete();
            return redirect('industri')->with('success', "Industri Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('industri')->with('failed', "Industri Gagal Dihapus");
        }
    }

    public function print() {
        $industri = DB::table('tb_industri')->get();
        return view('masterData.industri.print', [
            'industri' => $industri,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
