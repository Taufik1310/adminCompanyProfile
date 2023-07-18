@extends('layouts.main')
@section('title', 'Detail Fasilitas')
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
                            <h4 class="card-title text-primary">Detail Data Fasilitas</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Fasilitas</td>
                                            <td class="text-primary text-wrap col-9">{{ $fasilitas->id_fasilitas }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Foto</td>
                                            <td class="text-primary text-wrap"><img src="{{ asset('assets/images/fasilitas/'.$fasilitas->foto) }}" class="rounded" alt="{{ asset('assets/images/fasilitas/'.$fasilitas->foto) }}" width="150px"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Fasilitas</td>
                                            <td class="text-primary text-wrap">{{ $fasilitas->nama_fasilitas }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Deskripsi</td>
                                            <td class="text-primary text-wrap">{{ $fasilitas->deskripsi }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('fasilitas') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("fasilitas/".$fasilitas->id_fasilitas."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('fasilitas/'.$fasilitas->id_fasilitas) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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