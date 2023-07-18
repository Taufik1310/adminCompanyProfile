@extends('layouts.print')
@section('title', 'Cetak Industri')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('industri') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Industri</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" >
                                    <thead>
                                        <tr>
                                            <th scope="col-1">No</th>
                                            <th scope="col-1">ID Industri</th>
                                            <th scope="col-2">Nama Industri</th>
                                            <th scope="col-8">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($industri as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $loop->iteration }}</td>
                                                <td class="text-primary text-wrap">{{ $item->id_industri }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_industri }}</td>
                                                <td class="text-primary text-wrap">{{ $item->deskripsi }}</td>
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