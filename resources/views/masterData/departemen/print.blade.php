@extends('layouts.print')
@section('title', 'Cetak Departemen')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('departemen') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Departemen</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary table-sm" >
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">ID Departemen</th>
                                            <th scope="col">Nama Departemen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($departemen as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $loop->iteration }}</td>
                                                <td class="text-primary text-wrap">{{ $item->id_departemen }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_departemen }}</td>
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