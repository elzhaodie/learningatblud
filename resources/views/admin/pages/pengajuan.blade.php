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
            @include('components.sidebarblud')

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
                                        
                                        <div class="profile-header">

                                            <img src="{{ asset('dist/img/logo/smantass.jpeg') }}" alt="Logo Sekolah" class="school-logo">

                                            <div class="profile-info">
                                                <h4 class="text-dark">SMK Negeri 1 Bisa Maju</h4>
                                                <p class="role">Sekretariat (Admin)</p>
                                                
                                                <div class="profile-detail">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span>Surabaya, Jawa Timur</span>
                                                </div>
                                                <div class="profile-detail">
                                                    <i class="fas fa-building"></i>
                                                    <span>Biro Perekonomian</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <button class="action-button">
                                            <i class="fas fa-file-alt"></i>
                                            <span>Pendirian</span>
                                        </button>

                                    </div>
                                </div>

                                {{-- Bagian Latar Belakang (Text Editor) --}}
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="m-0 font-weight-bold text-primary">Latar Belakang</h6>
                                    </div>
                                    <div class="card-body">
                                        {{-- Di sini Anda bisa menaruh text editor seperti TinyMCE atau CKEditor --}}
                                        <textarea class="form-control" rows="10" placeholder="Tuliskan latar belakang di sini..."></textarea>
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
    </body>
</html>