<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeknologiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teknologi = DB::table('tb_teknologi')->get();
        return view('masterData.teknologi.index', [
            'teknologi' => $teknologi,
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
        return view('masterData.teknologi.create', [
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
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('assets/images/teknologi'), $filename);
            DB::table('tb_teknologi')->insert([
                "id_teknologi" => $request->id_teknologi,
                "nama_teknologi" => $request->nama_teknologi,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('teknologi')->with('success', "Teknologi Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('teknologi')->with('failed', "Teknologi Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teknologi  $teknologi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teknologi = DB::table('tb_teknologi')->where('id_teknologi', $id)->first();
        return view('masterData.teknologi.show', [
            'teknologi' => $teknologi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teknologi  $teknologi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teknologi = DB::table('tb_teknologi')->where('id_teknologi', $id)->first();
        return view('masterData.teknologi.edit', [
            'teknologi' => $teknologi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teknologi  $teknologi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $teknologi = DB::table('tb_teknologi')->where('id_teknologi', $id)->first();
            if (file_exists(public_path('assets/images/teknologi/'.$teknologi->logo)) && ($request->logo != ""))  {
                unlink(public_path('assets/images/teknologi/'.$teknologi->logo));  
            }
            $file = $request->file('logo');
            $filename = ($file === NULL) ? $teknologi->logo : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/teknologi'), $filename);
            }
            DB::table('tb_teknologi')->where('id_teknologi', $id)->update([
                "nama_teknologi" => $request->nama_teknologi,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('teknologi')->with('success', "Teknologi Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('teknologi')->with('failed', "Teknologi Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teknologi  $teknologi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $teknologi = DB::table('tb_teknologi')->where('id_teknologi', $id)->first();
            unlink(public_path('assets/images/teknologi/'.$teknologi->logo));
            DB::table('tb_teknologi')->where('id_teknologi', $id)->delete();
            return redirect('teknologi')->with('success', "Teknologi Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('teknologi')->with('failed', "Teknologi Gagal Dihapus");
        }
    }

    public function print()
    {
        $teknologi = DB::table('tb_teknologi')->get();
        return view('masterData.teknologi.print', [
            'teknologi' => $teknologi,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
