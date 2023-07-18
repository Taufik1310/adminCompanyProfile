@extends('layouts.print')
@section('title', 'Cetak Karyawan')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="mb-2" data-aos="fade-up" data-aos-delay="800">
                    <button onclick="printDiv('printableArea')" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
                    <a href="{{ url('karyawan') }}" class="btn bg-white border border-primary border-2 text-primary">Kembali</a>
                </div>
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-delay="800"

                    id="printableArea"
                >
                    <div class="card-header">
                        <div class="header-title text-center">
                            <h4 class="card-title text-primary">Data Karyawan</h4>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary table-sm" >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Karyawan</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Posisi</th>
                                            <th scope="col">Gaji</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tanggal Bergabung</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $item)
                                            <tr>
                                                <td class="text-primary text-wrap text-center">{{ $item->id_karyawan }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_lengkap }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->nama_posisi }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->gaji }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->status }}</td>
                                                <td class="text-primary text-wrap text-center">{{ $item->tgl_bergabung }}</td>
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