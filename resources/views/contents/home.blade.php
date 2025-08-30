@extends('layouts.app')
@section('content')
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
			</div>
			<h1 id="ph-value">N/A</h1>
		</div>
		<div class="card">
			<div class="head">
				<div>
					<h2>DO (Disolved Oxygen)</h2>
					<p>mg/L</p>
				</div>
			</div>
			<h1 id="do-value">N/A</h1>
		</div>
		<div class="card">
			<div class="head">
				<div>
					<h2>Suhu</h2>
					<p>&#176;C</p>
				</div>
			</div>
			<h1 id="temp-value">N/A</h1>
		</div>
		<div class="card">
			<div class="head">
				<div>
					<h2>Aerator</h2>
					<p></p>
				</div>
			</div>
			<h1 id="aerator-value">N/A</h1>
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
	</section>
	<!-- NAVBAR -->
@endsection
