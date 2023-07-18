@extends('layouts.main')
@section('title', 'Ubah Platform')
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
                            <h4 class="card-title text-primary">Ubah Data Platform</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('platform/'.$platform->id_platform) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_platform">ID Platform</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="id_platform" name="id_platform" value="{{ $platform->id_platform }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_platform">Nama Platform</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="nama_platform" name="nama_platform" value="{{ $platform->nama_platform }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="logo">Logo</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control border-primary text-dark" id="logo" name="logo" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 mb-0" for="deskripsi">Deskripsi</label>
                                <div class="col-sm-9">
                                <textarea class="form-control border-primary text-dark" id="deskripsi" name="deskripsi" rows="10">{{ $platform->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('platform') }}" class="btn bg-transparent border border-primary">Kembali</a>                                
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