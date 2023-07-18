@extends('layouts.main')
@section('title', 'Tambah Portofolio')
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
                            <h4 class="card-title text-primary">Tambah Data Portofolio</h4>
                        </div>
                    </div>
                    <div class="card-body text-primary">
                        <form class="form-horizontal" action="{{ url('portofolio') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_portofolio">ID Portofolio</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary text-dar" id="id_portofolio" name="id_portofolio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="nama_proyek">Nama Proyek</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control border-primary" id="nama_proyek" name="nama_proyek">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_teknologi">Teknologi Inti</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_teknologi" name="id_teknologi">
                                        @foreach ($teknologi as $item)
                                            <option value="{{ $item->id_teknologi }}">{{ $item->id_teknologi }} - {{ $item->nama_teknologi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_platform">Platform</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_platform" name="id_platform">
                                        @foreach ($platform as $item)
                                        <option value="{{ $item->id_platform }}">{{ $item->id_platform }} - {{ $item->nama_platform }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_industri">Industri</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_industri" name="id_industri">
                                        @foreach ($industri as $item)
                                        <option value="{{ $item->id_industri }}">{{ $item->id_industri }} - {{ $item->nama_industri }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_layanan">Layanan</label>
                                <div class="col-sm-9">
                                    <select class="form-select border-primary" id="id_layanan" name="id_layanan">
                                        @foreach ($layanan as $item)
                                        <option value="{{ $item->id_layanan }}">{{ $item->id_layanan }} - {{ $item->nama_layanan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="id_klien">Klien</label>
                                <div class="col-sm-9 d-flex">
                                    <select class="form-select border-primary me-1" id="id_klien" name="id_klien">
                                        @foreach ($klien as $item)
                                        <option value="{{ $item->id_klien }}">{{ $item->id_klien }} - {{ $item->nama_klien }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ url('klien/create') }}" class="btn bg-primary border border-primary btn-sm text-white">Tambah Data Klien</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="anggaran">Anggaran</label>
                                <div class="col-sm-9 d-flex">
                                    <span class="btn bg-transparent border border-primary">Rp.</span>
                                    <input type="number" class="form-control border-primary" id="anggaran" name="anggaran">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="tgl_mulai_produksi">Tanggal Mulai Produksi</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control border-primary" id="tgl_mulai_produksi" name="tgl_mulai_produksi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3 align-self-center mb-0" for="tgl_rilis">Tanggal Rilis</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control border-primary" id="tgl_rilis" name="tgl_rilis">
                                </div>
                            </div>
                            <div class="form-group text-end mt-5">
                                <a href="{{ url('portofolio') }}" class="btn bg-transparent border border-primary">Kembali</a>
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