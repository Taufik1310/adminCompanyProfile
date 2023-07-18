@extends('layouts.print')
@section('title', 'Cetak Klien')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('klien') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Klien</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-3 text-center">ID Klien</th>
                                            <th scope="col" class="col-4 text-center">Logo</th>
                                            <th scope="col" class="col-5 text-center">Nama Klien</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($klien as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $item->id_klien }}</td>
                                                <td class="text-primary text-wrap text-center"><img src="{{ asset('assets/images/klien/'.$item->logo) }}" class="rounded" alt="{{ asset('assets/images/klien/'.$item->logo) }}" width="120px"></td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_klien }}</td>
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