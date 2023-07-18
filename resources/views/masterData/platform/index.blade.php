@extends('layouts.main')
@section('title', 'Platform')
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
                            <h4 class="card-title text-primary">Data Platform</h4>
                        </div>
                        <div>
                            <a href="{{ url('platform/print') }}" class="btn bg-transparent border border-primary text-primary"><i class="bi bi-printer-fill"></i> Cetak</a>
                            <a href="{{ url('platform/create') }}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped text-primary" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-2">ID Platform</th>
                                            <th scope="col" class="col-3">Logo</th>
                                            <th scope="col" class="col-5">Nama Platform</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($platform as $item)
                                            <tr>
                                                <th class="text-primary text-wrap" scope="row">{{ $item->id_platform }}</th>
                                                <td class="text-primary text-wrap"><img src="{{ asset('assets/images/platform/'.$item->logo) }}" class="rounded" alt="{{ asset('assets/images/platform/'.$item->logo) }}" width="100px"></td>
                                                <td class="text-primary text-wrap">{{ $item->nama_platform }}</td>
                                                <td>
                                                    <div class="dropstart">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>                                          
                                                        <ul class="dropdown-menu bg-primary">
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('platform/'.$item->id_platform) }}">Detail</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-center text-white" href="{{ url('platform/'.$item->id_platform.'/edit') }}">Edit</a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                              <form action="{{ url('platform/'.$item->id_platform) }}" enctype="multipart/form-data" method="POST">
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