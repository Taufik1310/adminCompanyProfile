@extends('layouts.main')
@section('title', 'Ubah Direksi')
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
                            <h4 class="card-title text-primary">Ubah Data Direksi</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('direksi/'.$direksi->id_direksi) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_direksi">ID Direksi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-black" id="id_direksi" name="id_direksi" value="{{ $direksi->id_direksi }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-black" id="nama" name="nama" value="{{ $direksi->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="foto">Foto</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control border-primary text-black" id="foto" name="foto" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_jabatan">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary text-black" id="id_jabatan" name="id_jabatan">
                                        @foreach ($jabatan as $item)
                                            @if ($item->id_jabatan == $direksi->id_jabatan)
                                                <option value="{{ $item->id_jabatan }}" selected>{{ $item->id_jabatan }} - {{ $item->nama_jabatan }}</option>
                                            @else
                                                <option value="{{ $item->id_jabatan }}">{{ $item->id_jabatan }} - {{ $item->nama_jabatan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="pendidikan">Pendidikan</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-black" id="pendidikan" name="pendidikan" value="{{ $direksi->pendidikan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="alamat">Alamat</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-black" id="alamat" name="alamat" value="{{ $direksi->alamat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="no_telp">No Telepon</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control border-primary text-black" id="no_telp" name="no_telp" value="{{ $direksi->no_telp }}">
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('direksi') }}" class="btn bg-transparent border border-primary">Kembali</a>                                
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