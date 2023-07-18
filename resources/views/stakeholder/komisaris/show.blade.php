@extends('layouts.main')
@section('title', 'Detail Komisaris')
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
                            <h4 class="card-title text-primary">Detail Data Komisaris</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped text-primary" >
                                    <tbody>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold col-3">ID Komisaris</td>
                                            <td class="text-primary text-wrap col-9">{{ $komisaris->id_komisaris }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Nama Lengkap</td>
                                            <td class="text-primary text-wrap">{{ $komisaris->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Foto</td>
                                            <td class="text-primary text-wrap"><img src="{{ asset('assets/images/komisaris/'.$komisaris->foto) }}" class="rounded w-25" alt="{{ asset('assets/images/komisaris/'.$komisaris->foto) }}"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Jabatan</td>
                                            <td class="text-primary text-wrap">{{ $komisaris->nama_jabatan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Pendidikan</td>
                                            <td class="text-primary text-wrap">{{ $komisaris->pendidikan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">Alamat</td>
                                            <td class="text-primary text-wrap">{{ $komisaris->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary text-wrap fw-bold">No Telepon</td>
                                            <td class="text-primary text-wrap">{{ $komisaris->no_telp }}</td>
                                        </tr>
                                    </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="ms-1">
                                    <a href="{{ url('komisaris') }}" class="btn bg-transparent border border-primary text-primary">Kembali</a>
                                </div>
                                <div class="ms-1">
                                    <a href="{{ url("komisaris/".$komisaris->id_komisaris."/edit") }}" class="text-white btn btn-primary">Edit</a>
                                </div>
                                <form action="{{ url('komisaris/'.$komisaris->id_komisaris) }}" enctype="multipart/form-data" method="POST" class="ms-1">
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