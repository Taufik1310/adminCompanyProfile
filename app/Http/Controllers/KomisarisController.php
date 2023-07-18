<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class KomisarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komisaris = DB::table('tb_komisaris')
        ->join('tb_jabatan', 'tb_komisaris.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_komisaris.*', 'tb_jabatan.nama_jabatan')
        ->get();

        return view('stakeholder.komisaris.index', [
            'komisaris' => $komisaris,
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
        return view('stakeholder.komisaris.create', [
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
            $file->move(public_path('assets/images/komisaris'), $filename);
            DB::table('tb_komisaris')->insert([
                "id_komisaris" => $request->id_komisaris,
                "nama" => $request->nama,
                "foto" => $filename,
                "id_jabatan" => $request->id_jabatan,
                "pendidikan" => $request->pendidikan,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('komisaris')->with('success', "Komisaris Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('komisaris')->with('failed', "Komisaris Gagal Ditambahkan");
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
        $komisaris = DB::table('tb_komisaris')
        ->where('id_komisaris', $id)
        ->join('tb_jabatan', 'tb_komisaris.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_komisaris.*', 'tb_jabatan.nama_jabatan')
        ->first();

        return view('stakeholder.komisaris.show', [
            'komisaris' => $komisaris,
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
        $komisaris = DB::table('tb_komisaris')->where('id_komisaris', $id)->first();
        $jabatan = DB::table('tb_jabatan')->get();
        return view('stakeholder.komisaris.edit', [
            'komisaris' => $komisaris,
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
            $komisaris = DB::table('tb_komisaris')->where('id_komisaris', $id)->first();
            if (file_exists(public_path('assets/images/komisaris/'.$komisaris->foto)) && ($request->foto != ""))  {
                unlink(public_path('assets/images/komisaris/'.$komisaris->foto));  
            }
            $file = $request->file('foto');
            $filename = ($file === NULL) ? $komisaris->foto : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/komisaris'), $filename);
            }
            DB::table('tb_komisaris')->where('id_komisaris', $id)->update([
                "nama" => $request->nama,
                "foto" => $filename,
                "id_jabatan" => $request->id_jabatan,
                "pendidikan" => $request->pendidikan,
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
            ]);
            return redirect('komisaris')->with('success', "Komisaris Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('komisaris')->with('failed', "Komisaris Gagal Diubah");
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
            $komisaris = DB::table('tb_komisaris')->where('id_komisaris', $id)->first();
            unlink(public_path('assets/images/komisaris/'.$komisaris->foto));
            DB::table('tb_komisaris')->where('id_komisaris', $id)->delete();
            return redirect('komisaris')->with('success', "Komisaris Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('komisaris')->with('failed', "komisaris Gagal Dihapus");
        }
    }

    public function print() {
        $komisaris = DB::table('tb_komisaris')
        ->join('tb_jabatan', 'tb_komisaris.id_jabatan', '=', 'tb_jabatan.id_jabatan')
        ->select('tb_komisaris.*', 'tb_jabatan.nama_jabatan')
        ->get();
        return view('stakeholder.komisaris.print', [
            'komisaris' => $komisaris,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
