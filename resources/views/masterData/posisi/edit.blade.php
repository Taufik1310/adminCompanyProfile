@extends('layouts.main')
@section('title', 'Edit Posisi')
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
                            <h4 class="card-title text-primary">Edit Data Posisi</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('posisi/'.$posisi->id_posisi) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_posisi">ID posisi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="id_posisi" name="id_posisi" value="{{ $posisi->id_posisi }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_posisi">Nama posisi</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_posisi" name="nama_posisi" value="{{ $posisi->nama_posisi }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_departemen">Departemen</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary text-dark" id="id_departemen" name="id_departemen">
                                        @foreach ($departemen as $item)
                                            @if ($item->id_departemen == $posisi->id_departemen)
                                                <option value="{{ $item->id_departemen }}" selected>{{ $item->id_departemen }} - {{ $item->nama_departemen }}</option>
                                            @else
                                                <option value="{{ $item->id_departemen }}">{{ $item->id_departemen }} - {{ $item->nama_departemen }}</option>
                                            @endif
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