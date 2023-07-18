@extends('layouts.print')
@section('title', 'Cetak Platform')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('platform') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Platform</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" >
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-1 text-center">ID Platform</th>
                                            <th scope="col" class="col-1 text-center">Logo</th>
                                            <th scope="col" class="col-2 text-center">Nama Platform</th>
                                            <th scope="col" class="col-8 text-center">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($platform as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $item->id_platform }}</td>
                                                <td class="text-primary text-wrap text-center"><img src="{{ asset('assets/images/platform/'.$item->logo) }}" class="rounded" alt="{{ asset('assets/images/platform/'.$item->logo) }}" width="120px"></td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_platform }}</td>
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