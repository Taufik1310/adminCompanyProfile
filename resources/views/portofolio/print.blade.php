@extends('layouts.print')
@section('title', 'Portofolio')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('portofolio') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"
                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Portofolio</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary table-sm" >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-1">ID Portofolio</th>
                                            <th scope="col">Nama Proyek</th>
                                            <th scope="col">Klien</th>
                                            <th scope="col">Teknologi Inti</th>
                                            <th scope="col">Platform</th>
                                            <th scope="col">Industri</th>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">Anggaran</th>
                                            <th scope="col">Tanggal Mulai Produksi</th>
                                            <th scope="col">Tanggal Rilis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $item)
                                            <tr>
                                                <th class="text-primary text-wrap text-center" scope="row">{{ $item->id_portofolio }}</th>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_proyek }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_klien }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_teknologi }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_platform }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_industri }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_layanan }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->anggaran }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->tgl_mulai_produksi }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->tgl_rilis }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection