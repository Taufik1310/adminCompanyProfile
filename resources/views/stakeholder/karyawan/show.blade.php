@extends('layouts.main')
@section('title', 'Detail Karyawan')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"
                >
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title text-primary">Detail Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Karyawan</td>
                                            <td class="text-primary text-wrap col-9">{{ $karyawan->id_karyawan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Lengkap</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->nama_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Posisi</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->nama_posisi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Gaji</td>
                                            <td class="text-primary text-wrap">Rp. {{ $karyawan->gaji }}/bulan</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Status</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->status }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Tanggal Bergabung</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->tgl_bergabung }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Alamat</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">No Telepon</td>
                                            <td class="text-primary text-wrap">{{ $karyawan->no_telp }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('karyawan') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("karyawan/".$karyawan->id_karyawan."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('karyawan/'.$karyawan->id_karyawan) }}" enctype="multipart/form-data" method="POST" class="ms-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                      Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection