@extends('layouts.print')
@section('title', 'Cetak Apresiasi')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('apresiasi') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Apresiasi</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-1 text-center">ID Apresiasi</th>
                                            <th scope="col" class="col-1 text-center">Logo</th>
                                            <th scope="col" class="col-2 text-center">Nama Apresiasi</th>
                                            <th scope="col" class="col-8 text-center">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apresiasi as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $item->id_apresiasi }}</td>
                                                <td class="text-primary text-wrap text-center"><img src="{{ asset('assets/images/apresiasi/'.$item->logo) }}" class="rounded bg-primary p-1" alt="{{ asset('assets/images/apresiasi/'.$item->logo) }}" width="120px"></td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_apresiasi }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->deskripsi }}</td>
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