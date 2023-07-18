@extends('layouts.main')
@section('title', 'Ubah Teknologi')
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
                            <h4 class="card-title text-primary">Ubah Data Teknologi Inti</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('teknologi/'.$teknologi->id_teknologi) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_teknologi">ID teknologi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="id_teknologi" name="id_teknologi" value="{{ $teknologi->id_teknologi }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_teknologi">Nama Teknologi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dark" id="nama_teknologi" name="nama_teknologi" value="{{ $teknologi->nama_teknologi }}">
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
                                    <textarea class="form-control border-primary text-dark" id="deskripsi" name="deskripsi" rows="10">{{ $teknologi->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('teknologi') }}" class="btn bg-transparent border border-primary">Kembali</a>                                
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