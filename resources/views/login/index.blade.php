@extends('layouts.auth')
@section('title', 'Login')
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
   <form action="{{ url('login') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group">
               <label for="username" class="form-label">Username</label>
               <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder=" " autofocus required 
               value="{{ old('username') }}"
               >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder=" " required>
            </div>
         </div>
      </div>
      <div class="d-flex justify-content-center">
         <button type="submit" class="btn btn-primary">Login</button>
      </div>
      <p class="mt-3 text-center">
         Tidak punya akun? <a href="{{ url('register') }}" class="text-underline">Klik disini untuk sign up.</a>
      </p>
   </form>
@endsection
            