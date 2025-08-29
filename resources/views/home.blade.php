@extends('layouts.app')
@section('content')
    {{-- <div class="col-md-8">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                Selamat Datang <strong>{{ auth()->user()->name }}</strong>
                <hr>
                <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">KELUAR</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div> --}}
    {{-- SIDEBAR --}}
    <section id="sidebar">
        <a href="#" class="brand"><i class="bx bxs-smile icon"></i> Panzer IoT</a>
        <ul class="side-menu">
            <li><a href="#" class="active"><i class="bx bxs-dashboard icon"></i> Beranda</a></li>
            <li><a href="#" class=""><i class="bx bx-table icon"></i> Data</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#"><i class="bx bx-cog icon"></i> Pengaturan <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Telegram</a></li>
                    <li><a href="#">Akun</a></li>
                </ul>

            </li>
        </ul>

        <ul class="logout-menu">
            <li>
                <a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out icon"></i> Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </section>
@endsection
