<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = DB::table('tb_portofolio')
        ->join('tb_teknologi', 'tb_portofolio.id_teknologi', '=', 'tb_teknologi.id_teknologi')
        ->join('tb_platform', 'tb_portofolio.id_platform', '=', 'tb_platform.id_platform')
        ->join('tb_industri', 'tb_portofolio.id_industri', '=', 'tb_industri.id_industri')
        ->join('tb_layanan', 'tb_portofolio.id_layanan', '=', 'tb_layanan.id_layanan')
        ->join('tb_klien', 'tb_portofolio.id_klien', '=', 'tb_klien.id_klien')
        ->select('tb_portofolio.*', 'tb_teknologi.nama_teknologi', 'tb_platform.nama_platform', 'tb_industri.nama_industri', 'tb_layanan.nama_layanan', 'tb_klien.nama_klien')
        ->get();
        return view('portofolio.index', [
            'portofolio' => $portofolio,
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
        $teknologi = DB::table('tb_teknologi')->get();
        $platform = DB::table('tb_platform')->get();
        $industri = DB::table('tb_industri')->get();
        $layanan = DB::table('tb_layanan')->get();
        $klien = DB::table('tb_klien')->get();
        return view('portofolio.create', [
            'teknologi' => $teknologi,
            'platform' => $platform,
            'industri' => $industri,
            'layanan' => $layanan,
            'klien' => $klien,
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
            DB::table('tb_portofolio')->insert([
                "id_portofolio" => $request->id_portofolio,
                "nama_proyek" => $request->nama_proyek,
                "id_teknologi" => $request->id_teknologi,
                "id_platform" => $request->id_platform,
                "id_industri" => $request->id_industri,
                "id_layanan" => $request->id_layanan,
                "id_klien" => $request->id_klien,
                "anggaran" => $request->anggaran,
                "tgl_mulai_produksi" => $request->tgl_mulai_produksi,
                "tgl_rilis" => $request->tgl_rilis,
            ]);
            return redirect('portofolio')->with('success', "Data Portofolio dengan ID (".$request->id_portofolio.") Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('portofolio')->with('failed', "Data Portofolio Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show($id_portofolio)
    {
        $portofolio = DB::table('tb_portofolio')
        ->where('id_portofolio', $id_portofolio)
        ->join('tb_teknologi', 'tb_portofolio.id_teknologi', '=', 'tb_teknologi.id_teknologi')
        ->join('tb_platform', 'tb_portofolio.id_platform', '=', 'tb_platform.id_platform')
        ->join('tb_industri', 'tb_portofolio.id_industri', '=', 'tb_industri.id_industri')
        ->join('tb_layanan', 'tb_portofolio.id_layanan', '=', 'tb_layanan.id_layanan')
        ->join('tb_klien', 'tb_portofolio.id_klien', '=', 'tb_klien.id_klien')
        ->select('tb_portofolio.*', 'tb_teknologi.nama_teknologi', 'tb_platform.nama_platform', 'tb_industri.nama_industri', 'tb_layanan.nama_layanan', 'tb_klien.nama_klien')
        ->first();
        return view('portofolio.show', [
            'portofolio' => $portofolio,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id_portofolio)
    {
        $portofolio = DB::table('tb_portofolio')->where('id_portofolio', $id_portofolio)->first();
        $teknologi = DB::table('tb_teknologi')->get();
        $platform = DB::table('tb_platform')->get();
        $industri = DB::table('tb_industri')->get();
        $layanan = DB::table('tb_layanan')->get();
        $klien = DB::table('tb_klien')->get();
        return view('portofolio.edit', [
            'portofolio' => $portofolio,
            'teknologi' => $teknologi,
            'platform' => $platform,
            'industri' => $industri,
            'layanan' => $layanan,
            'klien' => $klien,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_portofolio)
    {
        try {
            DB::table('tb_portofolio')->where('id_portofolio', $id_portofolio)->update([
                "nama_proyek" => $request->nama_proyek,
                "id_teknologi" => $request->id_teknologi,
                "id_platform" => $request->id_platform,
                "id_industri" => $request->id_industri,
                "id_layanan" => $request->id_layanan,
                "id_klien" => $request->id_klien,
                "anggaran" => $request->anggaran,
                "tgl_mulai_produksi" => $request->tgl_mulai_produksi,
                "tgl_rilis" => $request->tgl_rilis,
            ]);
            return redirect('portofolio')->with('success', "Data Portofolio dengan ID (".$id_portofolio.") Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('portofolio')->with('failed', "Data Portofolio Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_portofolio)
    {
        try {
            DB::table('tb_portofolio')->where('id_portofolio', $id_portofolio)->delete();
            return redirect('portofolio')->with('success', "Data Portofolio dengan ID (".$id_portofolio.") Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('portofolio')->with('failed', "Data Portofolio Gagal Dihapus");
        }
    }

    public function print() {
        $portofolio = DB::table('tb_portofolio')
        ->join('tb_teknologi', 'tb_portofolio.id_teknologi', '=', 'tb_teknologi.id_teknologi')
        ->join('tb_platform', 'tb_portofolio.id_platform', '=', 'tb_platform.id_platform')
        ->join('tb_industri', 'tb_portofolio.id_industri', '=', 'tb_industri.id_industri')
        ->join('tb_layanan', 'tb_portofolio.id_layanan', '=', 'tb_layanan.id_layanan')
        ->join('tb_klien', 'tb_portofolio.id_klien', '=', 'tb_klien.id_klien')
        ->select('tb_portofolio.*', 'tb_teknologi.nama_teknologi', 'tb_platform.nama_platform', 'tb_industri.nama_industri', 'tb_layanan.nama_layanan', 'tb_klien.nama_klien')
        ->get();
        return view('portofolio.print', [
            'portofolio' => $portofolio,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
