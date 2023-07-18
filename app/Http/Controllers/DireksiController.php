<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DireksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direksi = DB::table('tb_direksi')
        ->join('tb_jabatan', 'tb_direksi.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_direksi.*', 'tb_jabatan.nama_jabatan')
        ->get();

        return view('stakeholder.direksi.index', [
            'direksi' => $direksi,
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
        $jabatan = DB::table('tb_jabatan')->get();
        return view('stakeholder.direksi.create', [
            'jabatan' => $jabatan,
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
            $file->move(public_path('assets/images/direksi'), $filename);
            DB::table('tb_direksi')->insert([
                "id_direksi" => $request->id_direksi,
                "nama" => $request->nama,
                "foto" => $filename,
                "id_jabatan" => $request->id_jabatan,
                "pendidikan" => $request->pendidikan,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('direksi')->with('success', "Direksi Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('direksi')->with('failed', "Direksi Gagal Ditambahkan");
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
        $direksi = DB::table('tb_direksi')
        ->where('id_direksi', $id)
        ->join('tb_jabatan', 'tb_direksi.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_direksi.*', 'tb_jabatan.nama_jabatan')
        ->first();

        return view('stakeholder.direksi.show', [
            'direksi' => $direksi,
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
        $direksi = DB::table('tb_direksi')->where('id_direksi', $id)->first();
        $jabatan = DB::table('tb_jabatan')->get();
        return view('stakeholder.direksi.edit', [
            'direksi' => $direksi,
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
            $direksi = DB::table('tb_direksi')->where('id_direksi', $id)->first();
            if (file_exists(public_path('assets/images/direksi/'.$direksi->foto)) && ($request->foto != ""))  {
                unlink(public_path('assets/images/direksi/'.$direksi->foto));  
            }
            $file = $request->file('foto');
            $filename = ($file === NULL) ? $direksi->foto : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/direksi'), $filename);
            }
            DB::table('tb_direksi')->where('id_direksi', $id)->update([
                "nama" => $request->nama,
                "foto" => $filename,
                "id_jabatan" => $request->id_jabatan,
                "pendidikan" => $request->pendidikan,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('direksi')->with('success', "Direksi Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('direksi')->with('failed', "Direksi Gagal Diubah");
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
            $direksi = DB::table('tb_direksi')->where('id_direksi', $id)->first();
            unlink(public_path('assets/images/direksi/'.$direksi->foto));
            DB::table('tb_direksi')->where('id_direksi', $id)->delete();
            return redirect('direksi')->with('success', "Direksi Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('direksi')->with('failed', "Direksi Gagal Dihapus");
        }
    }

    public function print() {
        $direksi = DB::table('tb_direksi')
        ->join('tb_jabatan', 'tb_direksi.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_direksi.*', 'tb_jabatan.nama_jabatan')
        ->get();
        return view('stakeholder.direksi.print', [
            'direksi' => $direksi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
