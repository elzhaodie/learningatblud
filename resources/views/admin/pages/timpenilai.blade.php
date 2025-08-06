<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
        <title>Tim Penilai</title>
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
                            <h1 class="h3 mb-0 text-gray-800">Master Tim Penilai</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master Tim Penilai</li>
                            </ol>
                        </div>
                        @if ($message = Session::get('success'))
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
                                        @endif
                        <div class="row mb-3">
                                <div class="col-lg-12">
                                    <div class="card mb-4">
                                        <div class="table-responsive p-3">
                                            <table class="table align-items-center table-flush" id="dataTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama OPD Penilai</th>
                                                        <th>Dibuat Tanggal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($timpenilais as $timpenilai)
                                                    <tr>
                                                        <td>{{ $timpenilai->id }}</td>
                                                        <td>{{ $timpenilai->opd_penilai }}</td>
                                                        <td>{{ $timpenilai->created_at }}</td>
                                                        <td><a href="{{ route('timpenilai.edit', $timpenilai->id) }}" class="btn btn-sm btn-primary">Detail</a></td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">Tidak ada data tim penilai</td>
                                                    </tr>
                                                    @endforelse
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
