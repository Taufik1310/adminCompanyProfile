@extends('layouts.main')
@section('title', 'Ubah Komisaris')
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
                            <h4 class="card-title text-primary">Ubah Data komisaris</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('komisaris/'.$komisaris->id_komisaris) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_komisaris">ID komisaris</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="id_komisaris" name="id_komisaris" value="{{ $komisaris->id_komisaris }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama">Nama Lengkap</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="nama" name="nama" value="{{ $komisaris->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="foto">Foto</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control border-primary text-dark" id="foto" name="foto" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_jabatan">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary text-dark" id="id_jabatan" name="id_jabatan">
                                        @foreach ($jabatan as $item)
                                            @if ($item->id_jabatan == $komisaris->id_jabatan)
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
                                <input type="text" class="form-control border-primary text-dark" id="pendidikan" name="pendidikan" value="{{ $komisaris->pendidikan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="alamat">Alamat</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="alamat" name="alamat" value="{{ $komisaris->alamat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="no_telp">No Telepon</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control border-primary text-dark" id="no_telp" name="no_telp" value="{{ $komisaris->no_telp }}">
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