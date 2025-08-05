<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
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
                            <h1 class="h3 mb-0 text-gray-800">@yield('title-2')</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title-3')</li>
                            </ol>
                        </div>
                        {{-- Start Insert Bidang Form Content --}}
                            <!-- <div class="row mb-3">
                                <div class="col-lg-12">
                                    {{-- Form Basic --}}
                                    <div class="card mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Insert New Data Bidang</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route ('insertbidangbaru.store')}}" method="POST" class="user">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="bidang_name" name="bidang_name"
                                                        placeholder="Masukkan nama bidang" required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #1A237E;">Tambah Bidang</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        {{-- End Insert Bidang Form Content --}}
                        {{-- Start Data Tables}}
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    {{-- Form Basic --}}
                                    <div class="card mb-4">
                                        
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Master Data Bidang</h6>
                                            <button type="button" class="btn btn-primary mb-1">Primary</button>
                                        </div>
                                        <div class="table-responsive p-3">
                                            <table class="table align-items-center table-flush" id="dataTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Bidang</th>
                                                        <th>Dibuat Tanggal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($bidangs as $bidang)
                                                    <tr>
                                                        <td>{{ $bidang->id }}</td>
                                                        <td>{{ $bidang->bidang_name }}</td>
                                                        <td>{{ $bidang->created_at }}</td>
                                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">Tidak ada data bidang</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- End Data Tables}}
                        {{-- Dummy content}}
                            <!-- <div class="card shadow-sm mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Alerts Basic</h6>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert—check it out!</div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert—check it out!
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert—check it out!
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        A simple dark alert—check it out!
                                    </div>
                                </div>
                            </div> -->

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