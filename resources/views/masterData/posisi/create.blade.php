@extends('layouts.main')
@section('title', 'Tambah Posisi')
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
                            <h4 class="card-title text-primary">Tambah Data Posisi</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('posisi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_posisi">ID Posisi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dar" id="id_posisi" name="id_posisi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_posisi">Nama Posisi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_posisi" name="nama_posisi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_departemen">Departemen</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_departemen" name="id_departemen">
                                        @foreach ($departemen as $item)
                                            <option value="{{ $item->id_departemen }}">{{ $item->id_departemen }} - {{ $item->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="{{ url('posisi') }}" class="btn bg-transparent border border-primary">Kembali</a>
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