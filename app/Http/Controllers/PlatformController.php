<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platform = DB::table('tb_platform')->get();
        return view('masterData.platform.index', [
            'platform' => $platform,
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
        return view('masterData.platform.create', [
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
            $file->move(public_path('assets/images/platform'), $filename);
            DB::table('tb_platform')->insert([
                "id_platform" => $request->id_platform,
                "nama_platform" => $request->nama_platform,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('platform')->with('success', "Platform Berhasil Ditambahkan");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('platform')->with('failed', "Platform Gagal Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $platform = DB::table('tb_platform')->where('id_platform', $id)->first();
        return view('masterData.platform.show', [
            'platform' => $platform,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $platform = DB::table('tb_platform')->where('id_platform', $id)->first();
        return view('masterData.platform.edit', [
            'platform' => $platform,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $platform = DB::table('tb_platform')->where('id_platform', $id)->first();
            if (file_exists(public_path('assets/images/platform/'.$platform->logo)) && ($request->logo != ""))  {
                unlink(public_path('assets/images/platform/'.$platform->logo));  
            }
            $file = $request->file('logo');
            $filename = ($file === NULL) ? $platform->logo : $file->getClientOriginalName();
            if ($file !== NULL) {
                $file->move(public_path('assets/images/platform'), $filename);
            }
            DB::table('tb_platform')->where('id_platform', $id)->update([
                "nama_platform" => $request->nama_platform,
                "logo" => $filename,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('platform')->with('success', "Platform Berhasil Diubah");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('platform')->with('failed', "Platform Gagal Diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $platform = DB::table('tb_platform')->where('id_platform', $id)->first();
            unlink(public_path('assets/images/platform/'.$platform->logo));
            DB::table('tb_platform')->where('id_platform', $id)->delete();
            return redirect('platform')->with('success', "Platform Berhasil Dihapus");
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('platform')->with('failed', "Platform Gagal Dihapus");
        }
    }

    public function print()
    {
        $platform = DB::table('tb_platform')->get();
        return view('masterData.platform.print', [
            'platform' => $platform,
            'namaPerusahaan' => $this->namaPerusahaan,
        ]);
    }
}
