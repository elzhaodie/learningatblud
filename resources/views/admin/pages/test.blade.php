<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil BLUD</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #0B2B5C; /* warna biru tua */
      display: flex;
      height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #08254A;
      color: white;
      padding: 20px;
    }

    .sidebar h2 {
      margin: 0 0 30px;
      font-size: 18px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 12px 0;
      padding: 8px 12px;
      border-radius: 8px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background: #12346E;
    }

    /* Main */
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 20px;
      color: white;
    }

    .breadcrumb {
      margin-bottom: 20px;
      font-size: 14px;
    }

    /* Card wrapper */
    .card-wrapper {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    /* Card utama */
    .card {
      position: relative;
      background-color: #fff;
      border-radius: 16px;
      padding: 40px;
      width: 80%;
      max-width: 900px;
      z-index: 100;
      color: #333;
    }

    /* Lapisan bayangan pertama */
    .card::before {
      content: "";
      position: absolute;
      top: 20px;   
      left: 20px;  
      width: 100%;
      height: 100%;
      border-radius: 16px;
      background: rgba(0, 0, 0, 0.06); 
      z-index: -2;
    }

    /* Lapisan bayangan kedua */
    .card::after {
      content: "";
      position: absolute;
      top: 10px;   
      left: 10px;  
      width: 100%;
      height: 100%;
      border-radius: 16px;
      background: rgba(0, 0, 0, 0.08); 
      z-index: -1;
    }

    /* Konten profil */
    .profile-info {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .profile-info img {
      width: 100px;
      height: 100px;
      object-fit: contain;
    }

    .profile-text h2 {
      margin: 0;
      font-size: 20px;
    }

    .profile-text p {
      margin: 3px 0;
      font-size: 14px;
      color: #555;
    }

    /* Status */
    .status {
      margin-top: 30px;
      background-color: #f4f4f4;
      border-radius: 10px;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .status button {
      background-color: #0B2B5C;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 8px 16px;
      cursor: pointer;
      transition: 0.2s;
    }

    .status button:hover {
      background-color: #12346E;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>BLUD Jawa Timur</h2>
    <a href="#" class="active">🏠 Profil</a>
    <a href="#">📊 Monitoring</a>
  </div>

  <!-- Main -->
  <div class="main">
    <div class="breadcrumb">Application > Profil</div>
    
    <div class="card-wrapper">
      <div class="card">
        <div class="profile-info">
          <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Coat_of_arms_of_East_Java.svg" alt="Logo">
          <div class="profile-text">
            <h2>SMK Negeri 1 Bisa</h2>
            <p><b>Maju</b></p>
            <p>📍 Surabaya, Jawa Timur</p>
            <p>🏢 Biro Perekonomian</p>
          </div>
        </div>
        <div class="status">
          <span>Permohonan pendirian BLUD telah disetujui oleh Penilai Tim pada <b>28-05-2025</b></span>
          <button>Lihat Score</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>