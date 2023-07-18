@extends('layouts.main')
@section('title', 'Edit Karyawan')
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
                            <h4 class="card-title text-primary">Edit Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('karyawan/'.$karyawan->id_karyawan) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_karyawan">ID Karyawan</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="id_karyawan" name="id_karyawan" value="{{ $karyawan->id_karyawan }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_lengkap">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_lengkap" name="nama_lengkap" value="{{ $karyawan->nama_lengkap }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_posisi">Posisi</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary text-dark" id="id_posisi" name="id_posisi">
                                        @foreach ($posisi as $item)
                                            @if ($item->id_posisi == $karyawan->id_posisi)
                                                <option value="{{ $item->id_posisi }}" selected>{{ $item->id_posisi }} - {{ $item->nama_posisi }}</option>
                                            @else
                                                <option value="{{ $item->id_posisi }}">{{ $item->id_posisi }} - {{ $item->nama_posisi }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="gaji">Gaji</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="gaji" name="gaji" value="{{ $karyawan->gaji }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="status">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="status" name="status">
                                        @if ($karyawan->status == "Tetap")
                                            <option value="Tetap" seleted>Tetap</option>
                                            <option value="Sementara">Sementara</option>
                                        @else
                                            <option value="Tetap">Tetap</option>
                                            <option value="Sementara" selected>Sementara</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="tgl_bergabung">Tanggal Bergabung</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control border-primary" id="tgl_bergabung" name="tgl_bergabung" value="{{ $karyawan->tgl_bergabung }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="alamat">Alamat</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="alamat" name="alamat" value="{{ $karyawan->alamat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="no_telp">No Telepon</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control border-primary" id="no_telp" name="no_telp" value="{{ $karyawan->no_telp }}">
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('karyawan') }}" class="btn bg-transparent border border-primary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection