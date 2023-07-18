@extends('layouts.main')
@section('title', 'Direksi')
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
                            <h4 class="card-title text-primary">Data Direksi</h4>
                        </div>
                        <div>
                            <a href="{{ url('direksi/print') }}" class="btn bg-transparent border border-primary text-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
                            <a href="{{ url('direksi/create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Direksi</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($direksi as $item)
                                            <tr>
                                                <th class="text-primary text-wrap" scope="row">{{ $item->id_direksi }}</th>
                                                <td class="text-primary text-wrap">{{ $item->nama }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_jabatan }}</td>
                                                <td>
                                                    <div class="dropstart">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>                                          
                                                        <ul class="dropdown-menu bg-primary">
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('direksi/'.$item->id_direksi) }}">Detail</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('direksi/'.$item->id_direksi.'/edit') }}">Edit</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                              <form action="{{ url('direksi/'.$item->id_direksi) }}" enctype="multipart/form-data" method="POST">
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