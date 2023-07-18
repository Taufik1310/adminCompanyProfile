@extends('layouts.main')
@section('title', 'Tambah Komisaris')
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
                            <h4 class="card-title text-primary">Tambah Data Komisaris</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('komisaris') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_komisaris">ID Komisaris</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="id_komisaris" name="id_komisaris">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="foto">Foto</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control border-primary" id="foto" name="foto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_jabatan">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_jabatan" name="id_jabatan">
                                        @foreach ($jabatan as $item)
                                            <option value="{{ $item->id_jabatan }}">{{ $item->id_jabatan }} - {{ $item->nama_jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="pendidikan">Pendidikan</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="pendidikan" name="pendidikan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="alamat">Alamat</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="no_telp">No Telepon</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control border-primary" id="no_telp" name="no_telp">
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('komisaris') }}" class="btn bg-transparent border border-primary">Kembali</a>                                
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