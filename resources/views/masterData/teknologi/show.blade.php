@extends('layouts.main')
@section('title', 'Detail Teknologi')
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
                            <h4 class="card-title text-primary">Detail Data Teknologi Inti</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Teknologi</td>
                                            <td class="text-primary text-wrap col-9">{{ $teknologi->id_teknologi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Logo</td>
                                            <td class="text-primary text-wrap"><img src="{{ asset('assets/images/teknologi/'.$teknologi->logo) }}" class="rounded" alt="{{ asset('assets/images/teknologi/'.$teknologi->logo) }}" width="150px"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Teknologi</td>
                                            <td class="text-primary text-wrap">{{ $teknologi->nama_teknologi }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Deskripsi</td>
                                            <td class="text-primary text-wrap">{{ $teknologi->deskripsi }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('teknologi') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("teknologi/".$teknologi->id_teknologi."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('teknologi/'.$teknologi->id_teknologi) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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