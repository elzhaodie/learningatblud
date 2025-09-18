<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
        <title>Profil</title> {{-- Judul halaman diubah --}}

        {{-- CSS KHUSUS UNTUK HALAMAN PROFIL --}}
        {{-- Cara terbaik adalah meletakkan ini di file CSS terpisah dan memuatnya lewat head.
             Namun, untuk kemudahan, saya letakkan di sini. --}}
        <style>
            .profile-header {
                display: flex;
                align-items: center;
                gap: 20px;
                margin-bottom: 20px;
            }
            .school-logo {
                width: 90px;
                height: 90px;
                object-fit: contain;
                border-radius: 8px; /* Sedikit lengkungan agar lebih modern */
            }
            .profile-info h4 {
                font-weight: 600;
                font-size: 1.75rem;
                margin-bottom: 4px;
            }
            .profile-info .role {
                font-size: 1.1rem;
                color: #6c757d;
                margin-bottom: 12px;
            }
            .profile-detail {
                display: flex;
                align-items: center;
                gap: 10px;
                color: #495057;
                margin-bottom: 6px;
            }
            .profile-detail i {
                width: 18px;
                text-align: center;
                color: #868e96;
            }
            .action-button {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 16px;
                /* Menggunakan variabel warna dari template jika ada, atau warna custom */
                border: 1px solid #e3e6f0;
                background-color: #f8f9fa;
                border-radius: 6px;
                font-size: 0.9rem;
                color: #3a3b45;
                cursor: pointer;
                transition: background-color 0.2s;
            }
            .action-button:hover {
                background-color: #e9ecef;
            }
        </style>
    </head>

    <body id="page-top">
        <div id="wrapper">

            {{-- sidebar --}}
            @include('components.sidebaruserblud')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    {{-- topbar --}}
                    @include('components.topbar')

                    {{-- container fluid --}}
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Profil</h1> {{-- Judul diubah --}}
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Application</a></li> {{-- Breadcrumb disesuaikan --}}
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            </ol>
                        </div>

                        {{-- ========================================================= --}}
                        {{-- MULAI KONTEN PROFIL BARU --}}
                        {{-- ========================================================= --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        @foreach($data as $row)
                                        <div class="profile-header">
                                            <h4><img src="{{ asset('dist/img/logo/smantass.jpeg') }}" alt="Logo Sekolah" class="school-logo"></h4>
                                            <div class="profile-info">
                                                <h4 class="text-dark">{{ $row->opd_name }}</h4>
                                                <p class="role">{{ $row->role_name }}</p>
                                                
                                                <div class="profile-detail">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span>{{ $row->alamat}}</span>
                                                </div>
                                                <div class="profile-detail">
                                                    <i class="fas fa-building"></i>
                                                    <span>{{ $row->email}}</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        <a class="action-button {{ request()->is('admin/bidang') ? ' active' : '' }}" href="{{ route('index') }}" >
                                            <i class="fas fa-file-alt"></i>
                                            <span>Permohonan Pendirian</span>
                                        </a>
                                        <a class="action-button" href="{{ route('index') }}">
                                            <i class="fas fa-file-alt"></i>
                                            <span>History Permohonan</span>
                                        </a>

                                    </div>
                                </div>

                                {{-- Bagian Latar Belakang (Text Editor) --}}
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route ('insertpengajuan')}}" method="POST" enctype="multipart/form-data" class="user">
                                            @csrf
                                            <label for="select2SinglePlaceholder">Gambaran Umum</label>
                                            <br>
                                            {{-- Di sini Anda bisa menaruh text editor seperti TinyMCE atau CKEditor --}}
                                            <textarea class="form-control" rows="5" placeholder="Tuliskan gambaran umum OPD anda" id="gambaran_umum" name="gambaran_umum" required></textarea><br>
                                            <label for="select2SinglePlaceholder">Dokumen Substantif dan Teknis</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_subs_teknis" name="dok_subs_teknis" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>                
                                            <label for="select2SinglePlaceholder">Surat Permohonan</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_srt_permohonan" name="dok_srt_permohonan" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Surat Pernyataan Kesanggupan Meningkatkan Kinerja</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_srt_sanggup_meningkatkan_kinerja" name="dok_srt_sanggup_meningkatkan_kinerja" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Pola Tata Kelola</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_pola_tata_kelola" name="dok_pola_tata_kelola" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Standar Pelayanan Minimal</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_spm" name="dok_spm" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Rencana Strategi BLUD</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_renstra" name="dok_renstra" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Laporan Keuangan atau Prognosis/Proyeksi Keuangan</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dok_lapkeu" name="dok_lapkeu" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <label for="select2SinglePlaceholder">Laporan Audit Terakhir atau Pernyataan Bersedia Diaudit oleh Pemeriksa Eksternal Pemerintah</label>
                                            <div class="custom-file" >
                                                <input type="file" class="custom-file-input" id="dok_lap_audit" name="dok_lap_audit" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div><br><br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" style="background-color: #1A237E;">Ajukan Pendirian BLUD</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        {{-- ========================================================= --}}
                        {{-- AKHIR KONTEN PROFIL BARU --}}
                        {{-- ========================================================= --}}

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
        <script>
        document.querySelectorAll('.custom-file-input').forEach((input) => {
            input.addEventListener('change', function (e) {
                let fileName = e.target.files[0]?.name;
                if (fileName) {
                    e.target.nextElementSibling.innerText = fileName;
                } else {
                    e.target.nextElementSibling.innerText = "Choose file";
                }
            });
        });
        </script>
    </body>
</html>