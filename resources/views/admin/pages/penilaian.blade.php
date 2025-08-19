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
                            <h1 class="h3 mb-0 text-gray-800">Master Penilaian Substantif</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master Penilaian</li>
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
                                    <div class="card mb-4">
                                        <div class="table-responsive p-3">
                                            <table class="table align-items-center table-flush" id="dataTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kategori Penilaian</th>
                                                        <th>Nama Penilaian</th>
                                                        <th>Bobot Nilai</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($data as $penilaian)
                                                    <tr>
                                                        <td>{{ $penilaian->id }}</td>
                                                        <td>{{ $penilaian->kategori_name }}</td>
                                                        <td>{{ $penilaian->penilaian_name }}</td>
                                                        <td>{{ $penilaian->bobot }}%</td>
                                                        <td>
                                                            <a href="{{ route('penilaiansubstantif.edit', $penilaian->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">Tidak ada data tim penilai</td>
                                                    </tr>
                                                    @endforelse
                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                                                        <td><strong>{{ $totalBobot }}%</strong></td>
                                                        <td></td>
                                                    </tr>
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
