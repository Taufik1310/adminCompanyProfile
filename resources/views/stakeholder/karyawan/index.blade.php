@extends('layouts.main')
@section('title', 'Karyawan')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show border border-none" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger alert-dismissible fade show border border-none" role="alert">
          <i class="bi bi-dash-circle me-2"></i>{{ session('failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                            <h4 class="card-title text-primary">Data Karyawan</h4>
                        </div>
                        <div>
                            <a href="{{ url('karyawan/print') }}" class="btn bg-transparent border border-primary text-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
                            <a href="{{ url('karyawan/create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>ID Karyawan</th>
                                            <th>Nama Lengkap</th>
                                            <th>Posisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $item)
                                            <tr>
                                                <td class="text-primary text-wrap">{{ $item->id_karyawan }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_lengkap }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_posisi }}</td>
                                                <td>
                                                    <div class="dropstart">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>                                          
                                                        <ul class="dropdown-menu bg-primary">
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('karyawan/'.$item->id_karyawan) }}">Detail</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('karyawan/'.$item->id_karyawan.'/edit') }}">Edit</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                              <form action="{{ url('karyawan/'.$item->id_karyawan) }}" enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="border border-none bg-transparent text-white border-primary dropdown-item text-center">
                                                                  Hapus
                                                                </button>
                                                              </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
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