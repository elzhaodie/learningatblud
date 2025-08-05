<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title>RuangAdmin - Login</title>
        <link href="{{ asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dist/css/ruang-admin.css') }}" rel="stylesheet">
       
    </head>
    <body>
        {{-- Login Content --}}
            <div class="row min-vh-100 justify-content-center align-items-center fluid">
                <div class="col-md-5 left-panel">
                    <!-- Konten Container 1 -->
                    <div class="col-sm-10 content-left">
                        <br>
                        <br>
                        <img src="{{ asset('dist/img/blud_gambar.png') }}" class="img-fluid mb-4" alt="Logo BLUD Jatim">
                        <br>
                        <h2>BLUD Jatim in Here ...</h2>
                        <p style="color: #BAC0D2;">Selangkah lagi masuk ke Dashboard BLUD Jawa Timur,
                        Kelola Badan Layanan Umum Daerah Anda di satu tempat</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Konten Container 2 -->
                        <div class="login-form">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Insert Bidang</h1>
                            </div>
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
        {{-- End of Login Content --}}
    </body>
    
        {{-- Login Content --}}
        <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('dist/js/ruang-admin.min.js') }}"></script>
</html>