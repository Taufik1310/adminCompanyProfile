<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budaya = DB::table('tb_budaya')->get();
        return view('masterData.budaya.index', [
            'budaya' => $budaya,
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
        return view('masterData.budaya.create', [
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
            DB::table('tb_budaya')->insert([
                "id_budaya" => $request->id_budaya,
                "nama_budaya" => $request->nama_budaya,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('budaya')->with('success', "Budaya Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('budaya')->with('failed', "Budaya Gagal Ditambahkan");
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
        $budaya = DB::table('tb_budaya')->where('id_budaya', $id)->first();
        return view('masterData.budaya.show', [
            'budaya' => $budaya,
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
        $budaya = DB::table('tb_budaya')->where('id_budaya', $id)->first();
        return view('masterData.budaya.edit', [
            'budaya' => $budaya,
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
            DB::table('tb_budaya')->where('id_budaya', $id)->update([
                "nama_budaya" => $request->nama_budaya,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('budaya')->with('success', "Budaya Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('budaya')->with('failed', "Budaya Gagal Diubah");
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
            DB::table('tb_budaya')->where('id_budaya', $id)->delete();
            return redirect('budaya')->with('success', "Budaya Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('budaya')->with('failed', "Budaya Gagal Dihapus");
        }
    }

    public function print() {
        $budaya = DB::table('tb_budaya')->get();
        return view('masterData.budaya.print', [
            'budaya' => $budaya,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
