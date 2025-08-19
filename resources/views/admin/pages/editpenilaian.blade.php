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
                        {{-- Start Insert Penilaian Form Content --}}
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    {{-- Form Basic --}}
                                    <div class="card mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Edit Master Penilaian</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('penilaiansubstantif.update', $penilaian->id) }}" method="POST" class="user">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="select2SinglePlaceholder">Nama Penilaian</label>
                                                    <input type="text" class="form-control" id="penilaian_name" name="penilaian_name"
                                                         value="{{ old('penilaian_name', $penilaian->penilaian_name) }}" required>
                                                    <br>
                                                    <label for="select2SinglePlaceholder">Bobot</label>
                                                    <input type="text" class="form-control" id="bobot" name="bobot"
                                                         value="{{ old('bobot', $penilaian->bobot) }}%" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #1A237E;">Simpan Perubahan</button>
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

