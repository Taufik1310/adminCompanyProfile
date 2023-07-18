@extends('layouts.main')
@section('title', 'Portofolio')
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
                            <h4 class="card-title text-primary">Data Portofolio</h4>
                        </div>
                        <div>
                            <a href="{{ url('portofolio/print') }}" class="btn bg-transparent border border-primary text-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
                            <a href="{{ url('portofolio/create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-2">ID Portofolio</th>
                                            <th scope="col">Nama Proyek</th>
                                            <th scope="col">Teknologi Inti</th>
                                            <th scope="col">Klien</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $item)
                                            <tr>
                                                <th class="text-primary text-wrap" scope="row">{{ $item->id_portofolio }}</th>
                                                <td class="text-primary text-wrap">{{ $item->nama_proyek }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_teknologi }}</td>
                                                <td class="text-primary text-wrap">{{ $item->nama_klien }}</td>
                                                <td>
                                                    <div class="dropstart">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>                                          
                                                        <ul class="dropdown-menu bg-primary">
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('portofolio/'.$item->id_portofolio) }}">Detail</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('portofolio/'.$item->id_portofolio.'/edit') }}">Edit</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                              <form action="{{ url('portofolio/'.$item->id_portofolio) }}" enctype="multipart/form-data" method="POST">
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