<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
        <title>Daerah</title>
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
                            <h1 class="h3 mb-0 text-gray-800">Master Daerah</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Master Daerah</li>
                            </ol>
                        </div>
                        {{-- Start Insert Bidang Form Content --}}
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    {{-- Form Basic --}}
                                    <div class="card mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Insert Master Daerah</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route ('insertdaerah.store')}}" method="POST" class="user">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="select2SinglePlaceholder">Nama Daerah</label>
                                                    <input type="text" class="form-control" id="daerah_name" name="daerah_name"
                                                        placeholder="Masukkan nama daerah" required>
                                                    <br>
                                                    <label for="select2SinglePlaceholder">Jenis Daerah</label>
                                                        <select class="select2-single-placeholder form-control" name="jenis_daerah" id="jenis_daerah" required>
                                                            <option value="" disabled selected hidden>Pilih jenis daerah</option>    
                                                            <option value="Kabupaten">Kabupaten</option>
                                                            <option value="Kota">Kota</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #1A237E;">Tambah Daerah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- End Insert Bidang Form Content --}}
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
