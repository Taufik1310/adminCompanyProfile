<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrinsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prinsip = DB::table('tb_prinsip')->get();
        return view('masterData.prinsip.index', [
            'prinsip' => $prinsip,
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
        return view('masterData.prinsip.create', [
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
            DB::table('tb_prinsip')->insert([
                "id_prinsip" => $request->id_prinsip,
                "nama_prinsip" => $request->nama_prinsip,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('prinsip')->with('success', "Prinsip Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('prinsip')->with('failed', "Prinsip Gagal Ditambahkan");
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
        $prinsip = DB::table('tb_prinsip')->where('id_prinsip', $id)->first();
        return view('masterData.prinsip.show', [
            'prinsip' => $prinsip,
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
        $prinsip = DB::table('tb_prinsip')->where('id_prinsip', $id)->first();
        return view('masterData.prinsip.edit', [
            'prinsip' => $prinsip,
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
            DB::table('tb_prinsip')->where('id_prinsip', $id)->update([
                "nama_prinsip" => $request->nama_prinsip,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('prinsip')->with('success', "Prinsip Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('prinsip')->with('failed', "Prinsip Gagal Diubah");
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
            DB::table('tb_prinsip')->where('id_prinsip', $id)->delete();
            return redirect('prinsip')->with('success', "Prinsip Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('prinsip')->with('failed', "Prinsip Gagal Dihapus");
        }
    }

    public function print() {
        $prinsip = DB::table('tb_prinsip')->get();
        return view('masterData.prinsip.print', [
            'prinsip' => $prinsip,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
