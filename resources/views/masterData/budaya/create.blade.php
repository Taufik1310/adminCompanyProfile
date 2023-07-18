@extends('layouts.main')
@section('title', 'Tambah Budaya')
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
                            <h4 class="card-title text-primary">Tambah Data Budaya</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('budaya') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_budaya">ID Budaya</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control border-primary text-dar" id="id_budaya" name="id_budaya">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_budaya">Nama Budaya</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control border-primary" id="nama_budaya" name="nama_budaya">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 mb-0" for="deskripsi">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control border-primary text-dark" id="deskripsi" name="deskripsi" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('budaya') }}" class="btn bg-transparent border border-primary">Kembali</a>
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