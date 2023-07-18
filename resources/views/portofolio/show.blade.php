@extends('layouts.main')
@section('title', 'Detail Portofolio')
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
                            <h4 class="card-title text-primary">Detail Data Portofolio</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Portofolio</td>
                                            <td class="text-primary text-wrap col-9">{{ $portofolio->id_portofolio }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Proyek</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_proyek }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Klien</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_klien }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Teknologi Inti</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_teknologi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Platform</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_platform }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Industri</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_industri }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Layanan</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->nama_layanan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Anggaran</td>
                                            <td class="text-primary text-wrap">Rp. {{ $portofolio->anggaran }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Tanggal Mulai Produksi</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->tgl_mulai_produksi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Tanggal Rilis</td>
                                            <td class="text-primary text-wrap">{{ $portofolio->tgl_rilis }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('portofolio') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("portofolio/".$portofolio->id_portofolio."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('portofolio/'.$portofolio->id_portofolio) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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