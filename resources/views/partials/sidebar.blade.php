{{-- SIDEBAR --}}
<section id="sidebar">
    <a href="#" class="brand"><img src="{{ asset('assets/images/logo.png') }}" alt="smile" class="icon" style="width:24px; height:30px;"></i> Panzer IoT</a>
    <ul class="side-menu">
        <li><a href="{{ route('home') }}"  class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="bx bxs-dashboard icon"></i> Beranda</a></li>
        <li><a href="{{ route('data') }}"  class="{{ request()->routeIs('data') ? 'active' : '' }}"><i class="bx bx-table icon"></i> Data</a></li>
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