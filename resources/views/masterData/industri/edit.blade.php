@extends('layouts.main')
@section('title', 'Edit Industri')
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
                            <h4 class="card-title text-primary">Edit Data Industri</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('industri/'.$industri->id_industri) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_industri">ID Industri</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="id_industri" name="id_industri" value="{{ $industri->id_industri }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_industri">Nama Industri</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_industri" name="nama_industri" value="{{ $industri->nama_industri }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 mb-0" for="deskripsi">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control border-primary text-dark" id="deskripsi" name="deskripsi" rows="10">{{ $industri->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('industri') }}" class="btn bg-transparent border border-primary">Kembali</a>
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