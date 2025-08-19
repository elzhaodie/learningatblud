<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('dist/img/logo/logo2.png') }}">
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item{{ request()->is('admin') ? ' active' : ''}}">
        <a class="nav-link" href="{{ route('index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseBootstrap" class="collapse
        @if (request()->is('admin/bidang') || request()->is('admin/dropdowns') || request()->is('admin/modals') || request()->is('admin/popovers') || request()->is('admin/progress-bars'))
        show
        @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data</h6>
                <a class="collapse-item{{ request()->is('admin/bidang') ? ' active' : '' }}" href="{{ route('bidang') }}">Master Bidang</a>
                <a class="collapse-item{{ request()->is('admin/nilai') ? ' active' : '' }}" href="{{ route('nilai') }}">Master Nilai</a>
                <a class="collapse-item{{ request()->is('admin/timpenilai') ? ' active' : '' }}" href="{{ route('timpenilai') }}">Master Tim Penilai</a>
                <a class="collapse-item{{ request()->is('admin/daerah') ? ' active' : '' }}" href="{{ route('daerah') }}">Master Daerah</a>
                <a class="collapse-item{{ request()->is('admin/penilaian') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePenilaian"
                aria-expanded="false" aria-controls="collapsePenilaian">
                    Master Penilaian
                </a>
                {{-- Nested collapse content --}}
                <div id="collapsePenilaian" class="collapse pl-3
                    @if (request()->is('admin/penilaian/substantif*')|| request()->is('admin/penilaian/teknis*'))
                    show
                    @endif">
                    <a class="collapse-item{{ request()->is('admin/penilaian/substantif*') ? ' active' : '' }}" href="{{ route('penilaiansubstantif') }}">Substantif</a>
                    <a class="collapse-item{{ request()->is('admin/penilaian/teknis*') ? ' active' : '' }}" href="{{ route('penilaianteknis') }}">Teknis</a>
                    <a class="collapse-item{{ request()->is('admin/penilaian/administratif*') ? ' active' : '' }}" href="{{ route('penilaianadministratif') }}">Administratif</a>
                </div>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>