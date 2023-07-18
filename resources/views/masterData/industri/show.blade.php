@extends('layouts.main')
@section('title', 'Detail Industri')
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
                            <h4 class="card-title text-primary">Detail Data industri</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Industri</td>
                                            <td class="text-primary text-wrap col-9">{{ $industri->id_industri }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Industri</td>
                                            <td class="text-primary text-wrap">{{ $industri->nama_industri }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Deskripsi</td>
                                            <td class="text-primary text-wrap">{{ $industri->deskripsi }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('industri') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("industri/".$industri->id_industri."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('industri/'.$industri->id_industri) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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