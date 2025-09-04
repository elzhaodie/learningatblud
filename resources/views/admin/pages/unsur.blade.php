<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
        <title>Penilaian</title>
    </head>

    <body id="page-top">
        <div id="wrapper">

            {{-- sidebar --}}
            @include('components.sidebarblud')
            <!-- @include('components.sidebar') -->

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    {{-- topbar --}}
                    @include('components.topbar')

                    {{-- container fluid --}}
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Master Unsur</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master Unsur</li>
                            </ol>
                        </div>
                        <!-- @if ($message = Session::get('success'))
                                            <div class="card-header justify-content-between">
                                                <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom: 0px;">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h6><i class="fas fa-check"></i><b> Berhasil!</b></h6>
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @elseif ($message = Session::get('error'))
                                            <div class="card-header justify-content-between">
                                                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom: 0px;">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h6><i class="fas fa-times"></i><b> Gagal!</b></h6>
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @endif -->
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Kiri -->
                                                <div>
                                                </div>

                                                <!-- Kanan -->
                                                <div class="d-flex">
                                                    <!-- Kategori -->
                                                    <div class="form-group mr-3">
                                                        <label for="kategori_id">Kategori Penilaian :</label>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" id="kategori_id"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{ request('kategori_id') 
                                                                    ? $kategoris->firstWhere('id', request('kategori_id'))->kategori_name 
                                                                    : 'Pilih Kategori Penilaian' }}
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                @foreach($kategoris as $kat)
                                                                    <a class="dropdown-item" href="?kategori_id={{ $kat->id }}">
                                                                        {{ $kat->kategori_name }}
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Nama Penilaian -->
                                                    <div class="form-group">
                                                        <label for="dropdown3">Nama Penilaian :</label>
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" id="dropdown3"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{ request('penilaian_id') 
                                                                    ? $penilaians->firstWhere('id', request('penilaian_id'))->penilaian_name 
                                                                    : 'Pilih Penilaian' }}
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                @foreach($penilaians as $pen)
                                                                    <a class="dropdown-item" href="?kategori_id={{ request('kategori_id') }}&penilaian_id={{ $pen->id }}">
                                                                        {{ $pen->penilaian_name }}
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Table -->
                                        <div class="table-responsive p-3">
                                            <table class="table align-items-center table-flush" id="dataTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Penilaian</th>
                                                        <th>Nama Indikator</th>
                                                        <th>Nama Unsur</th>
                                                        <th>Bobot Nilai</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($data as $unsur)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $unsur->relasiunsurkepenilaian->penilaian_name }}</td>
                                                        <td>{{ $unsur->indikator }}</td>
                                                        <td>{{ $unsur->unsur }}</td>
                                                        <td>{{ $unsur->bobot }}</td>
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">Tidak ada data master unsur yang ditampilkan</td>
                                                    </tr>
                                                    @endforelse
                                                    @if ($totalBobot !== null)
                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                                                        <td><strong>{{ $totalBobot }}</strong></td>
                                                        <td></td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        {{-- Modal Logout --}}
                        @include('components.modal-logout')
                    </div>
                </div>

                {{-- Footer --}}
                @include('components.footer')
            </div>
        </div>

        {{-- Scroll to top --}}
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('components.scripts') 
    </body>
</html>


<form method="GET" action="">