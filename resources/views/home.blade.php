@extends('layouts.app')
@section('content')
    {{-- SIDEBAR --}}
    <section id="sidebar">
        <a href="#" class="brand"><img src="{{ asset('assets/images/logo.png') }}" alt="smile" class="icon" style="width:24px; height:30px;"></i> Panzer IoT</a>
        <ul class="side-menu">
            <li><a href="#" class="active"><i class="bx bxs-dashboard icon"></i> Beranda</a></li>
            <li><a href="#" class=""><i class="bx bx-table icon"></i> Data</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#"><i class="bx bx-cog icon"></i> Pengaturan <i class="bx bx-chevron-right icon-right"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Perangkat IoT</a></li>
                    <li><a href="#">Telegram</a></li>
                    <li><a href="#">Lokasi</a></li>
                </ul>

            </li>
        </ul>

        <div class="ads">
			<div class="wrapper">
				<a href="{{ route('logout') }}" class="btn-upgrade" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <p>&copy; {{ date('Y') }} Panzer Robotics. All Rights Reserved.</p>
			</div>
		</div>
    </section>

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Pencarian...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Akun</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">Beranda</h1>
			<ul class="breadcrumbs">
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>pH</h2>
							<p></p>
						</div>
						{{-- <i class='bx bx-trending-up icon' ></i> --}}
					</div>
					{{-- <span class="progress" data-value="40%"></span>
					<span class="label">40%</span> --}}
                    <h1>100</h1>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>DO (Disolved Oxygen)</h2>
							<p>mg/L</p>
						</div>
					</div>
                    <h1>100</h1>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>Suhu</h2>
							<p>&#176;C</p>
						</div>
					</div>
                    <h1>100</h1>
				</div>
                <div class="card">
					<div class="head">
						<div>
							<h2>Aerator</h2>
                            <p></p>
						</div>
					</div>
                    <h1>100</h1>
				</div>
			</div>
			<div class="data">
				<div class="content-data">
					<div class="head">
						<h3>pH</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#">Edit</a></li>
								<li><a href="#">Save</a></li>
								<li><a href="#">Remove</a></li>
							</ul>
						</div>
					</div>
					<div class="chart">
						<div id="chart"></div>
					</div>
				</div>
				<div class="content-data">
					<div class="head">
						<h3>DO (Disolved Oxygen)</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#">Edit</a></li>
								<li><a href="#">Save</a></li>
								<li><a href="#">Remove</a></li>
							</ul>
						</div>
					</div>
					<div class="chart">
						<div id="chart2"></div>
					</div>
				</div>
				<div class="content-data">
					<div class="head">
						<h3>Suhu</h3>
						<div class="menu">
							<i class='bx bx-dots-horizontal-rounded icon'></i>
							<ul class="menu-link">
								<li><a href="#">Edit</a></li>
								<li><a href="#">Save</a></li>
								<li><a href="#">Remove</a></li>
							</ul>
						</div>
					</div>
					<div class="chart">
						<div id="chart3"></div>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
@endsection
