@extends('layouts.app', ['title' => 'Login - Panzer Robotics IoT'])
@section('content')
<div class="col-md-4">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status' )}}
            </div>
            @endif
            <h4 class="font-weight-bold">MASUK</h4>
            <hr>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                    @error('email')
                        <div class="alert alert-danget mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Kata Sandi</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Kata Sandi">
                    @error('email')
                        <div class="alert alert-danget mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">MASUK</button>
                <hr>

                <a href="/forgot-password">Lupa Kata Sandi ?</a>
            </form>
        </div>
    </div>
    <div class="register mt-3 text-center">
        <p>Belum punya akun ? Daftar <a href="/register">Disini</a></p>
    </div>
</div>
    
@endsection