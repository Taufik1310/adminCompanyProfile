@extends('layouts.print')
@section('title', 'Cetak Komisaris')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('komisaris') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Komisaris</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary table-sm" >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Komisaris</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Pendidikan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($komisaris as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $item->id_komisaris }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama }}</td>
                                                <td class="text-primary text-wrap text-center"><img src="{{ asset('assets/images/komisaris/'.$item->foto) }}" class="rounded" alt="{{ asset('assets/images/komisaris/'.$item->foto) }}" width="50px"></td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_jabatan }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->pendidikan }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->alamat }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->no_telp }}</td>
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