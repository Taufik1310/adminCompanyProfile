@extends('layouts.main')
@section('title', 'Edit Jabatan')
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
                            <h4 class="card-title text-primary">Edit Data Jabatan</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('jabatan/'.$jabatan->id_jabatan) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_jabatan">ID Jabatan</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="id_jabatan" name="id_jabatan" value="{{ $jabatan->id_jabatan }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_jabatan">Nama Jabatan</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_jabatan" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}">
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('jabatan') }}" class="btn bg-transparent border border-primary">Kembali</a>
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