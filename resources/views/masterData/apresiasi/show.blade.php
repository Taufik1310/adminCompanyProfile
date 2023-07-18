@extends('layouts.main')
@section('title', 'Detail Apresiasi')
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
                            <h4 class="card-title text-primary">Detail Data Apresiasi</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Apresiasi</td>
                                            <td class="text-primary text-wrap col-9">{{ $apresiasi->id_apresiasi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Logo</td>
                                            <td class="text-primary text-wrap"><img src="{{ asset('assets/images/apresiasi/'.$apresiasi->logo) }}" class="rounded bg-primary p-1" alt="{{ asset('assets/images/apresiasi/'.$apresiasi->logo) }}" width="250px"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Apresiasi</td>
                                            <td class="text-primary text-wrap">{{ $apresiasi->nama_apresiasi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Deskripsi</td>
                                            <td class="text-primary text-wrap">{{ $apresiasi->deskripsi }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('apresiasi') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("apresiasi/".$apresiasi->id_apresiasi."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('apresiasi/'.$apresiasi->id_apresiasi) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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