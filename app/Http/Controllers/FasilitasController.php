<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = DB::table('tb_fasilitas')->get();
        return view('fasilitas.index', [
            'fasilitas' => $fasilitas,
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
        return view('fasilitas.create', [
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
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('assets/images/fasilitas'), $filename);
            DB::table('tb_fasilitas')->insert([
                "id_fasilitas" => $request->id_fasilitas,
                "nama_fasilitas" => $request->nama_fasilitas,
                "foto" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('fasilitas')->with('success', "Fasilitas Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('fasilitas')->with('failed', "Fasilitas Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = DB::table('tb_fasilitas')->where('id_fasilitas', $id)->first();
        return view('fasilitas.show', [
            'fasilitas' => $fasilitas,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = DB::table('tb_fasilitas')->where('id_fasilitas', $id)->first();
        return view('fasilitas.edit', [
            'fasilitas' => $fasilitas,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $fasilitas = DB::table('tb_fasilitas')->where('id_fasilitas', $id)->first();
            if (file_exists(public_path('assets/images/fasilitas/'.$fasilitas->foto)) && ($request->foto != ""))  {
                unlink(public_path('assets/images/fasilitas/'.$fasilitas->foto));  
            }
            $file = $request->file('foto');
            $filename = ($file === NULL) ? $fasilitas->foto : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/fasilitas'), $filename);
            }
            DB::table('tb_fasilitas')->where('id_fasilitas', $id)->update([
                "nama_fasilitas" => $request->nama_fasilitas,
                "foto" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('fasilitas')->with('success', "Fasilitas Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('fasilitas')->with('failed', "Fasilitas Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $fasilitas = DB::table('tb_fasilitas')->where('id_fasilitas', $id)->first();
            unlink(public_path('assets/images/fasilitas/'.$fasilitas->foto));
            DB::table('tb_fasilitas')->where('id_fasilitas', $id)->delete();
            return redirect('fasilitas')->with('success', "Fasilitas Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('fasilitas')->with('failed', "Fasilitas Gagal Dihapus");
        }
    }

    public function print()
    {
        $fasilitas = DB::table('tb_fasilitas')->get();
        return view('fasilitas.print', [
            'fasilitas' => $fasilitas,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
