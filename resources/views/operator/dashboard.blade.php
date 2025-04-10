<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f5f9;
        }

        .sidebar {
            width: 260px;
            background-color: #0f172a;
            color: #fff;
            padding: 25px 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            border-right: 1px solid #1e293b;
        }

        .sidebar h4 {
            color: #0ea5e9;
            text-align: center;
            margin-bottom: 35px;
            font-weight: bold;
            font-size: 20px;
        }

        .sidebar .nav-section {
            margin-top: 20px;
        }

        .sidebar .nav-section-title {
            font-size: 12px;
            letter-spacing: 1px;
            color: #94a3b8;
            text-transform: uppercase;
            margin-bottom: 10px;
            padding-left: 8px;
        }

        .sidebar .nav-link {
            color: #cbd5e1;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background 0.2s ease-in-out;
            font-size: 15px;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            font-size: 17px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link:focus {
            background-color: #0ea5e9;
            color: #fff;
        }

        .sidebar .collapse .nav-link {
            font-size: 14px;
            padding-left: 40px;
        }

        .logout-link {
            color: #f8d7da;
            background-color: #b91c1c;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            margin-top: 40px;
            transition: 0.2s ease-in-out;
            display: block;
            text-decoration: none;
            font-weight: 500;
        }

        .logout-link:hover {
            background-color: #991b1b;
            color: #fff;
        }

        .main-content {
            margin-left: 260px;
            flex-grow: 1;
            padding: 40px;
        }

        .navbar-dashboard {
            background-color: #fff;
            border-radius: 12px;
            padding: 10px 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h4><i class="bi bi-speedometer2"></i> Admin Panel</h4>

        <div class="nav-section">
            <div class="nav-section-title">Dashboard</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Dashboard</a>
                </li>
            </ul>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">Master</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('akun.index') }}">
                        <i class="bi bi-people"></i> Akun
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#articleMenu" role="button">
                        <i class="bi bi-journal-text"></i> Article
                    </a>
                    <div class="collapse" id="articleMenu">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ route('tags.index') }}"><i class="bi bi-tag"></i> Tag</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('article') }}"><i
                                        class="bi bi-file-text"></i> Article</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('module') }}"><i class="bi bi-box"></i> Module</a>
                </li>
            </ul>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">Configuration</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#settingMenu" role="button"
                        aria-expanded="false" aria-controls="settingMenu">
                        <i class="bi bi-gear-fill"></i> Setting
                    </a>
                    <div class="collapse" id="settingMenu">
                        <ul class="nav flex-column ms-3 mt-2">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">
                                    <i class="bi bi-person-circle"></i> Profile Perusahaan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('kontak') }}">
                                    <i class="bi bi-telephone-fill"></i> Kontak
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('medsos') }}">
                                    <i class="bi bi-share-fill"></i> Media Sosial
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <div class="main-content">
      <!-- Navbar Dashboard -->
      <nav class="navbar navbar-dashboard d-flex justify-content-between align-items-center mb-4">
          <span class="fw-semibold fs-4 text-dark">Dashboard Admin</span>
          <div class="d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 text-primary me-2"></i>
              <span class="fw-semibold text-dark">Admin</span>
          </div>
      </nav>
  
      <!-- Statistik Cards -->
      <div class="row g-4 mb-4">
          <div class="col-md-4">
              <div class="card border-0 shadow rounded-4">
                  <div class="card-body d-flex align-items-center">
                      <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                          <i class="bi bi-journal-text fs-3 text-primary"></i>
                      </div>
                      <div>
                          <h6 class="text-muted mb-1">Total Artikel</h6>
                          <h4 class="fw-bold">{{ $totalArticles ?? 0 }}</h4>
                      </div>
                  </div>
              </div>
          </div>
  
          @foreach ($modules as $module)
              <div class="col-md-4">
                  <div class="card border-0 shadow rounded-4">
                      <div class="card-body d-flex align-items-center">
                          <div class="bg-info bg-opacity-10 p-3 rounded-circle me-3">
                              <i class="bi bi-box-seam fs-3 text-info"></i>
                          </div>
                          <div>
                              <h6 class="text-muted mb-1">{{ $module->name }}</h6>
                              <h4 class="fw-bold">{{ $module->objects_count }}</h4>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  
      <!-- Row bawah -->
      <div class="row g-4 mb-4">
          <!-- To-Do List -->
          <div class="col-md-6">
              <div class="card border-0 shadow rounded-4">
                  <div class="card-body">
                      <h6 class="fw-bold mb-3"><i class="bi bi-list-check me-2"></i>To-Do Hari Ini</h6>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between">
                              Review artikel terbaru <span class="badge bg-primary">Penting</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between">
                              Upload gambar produk <span class="badge bg-warning text-dark">Sedang</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between">
                              Perbarui kontak perusahaan <span class="badge bg-success">Selesai</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
  
          <!-- Motivational Quote -->
          <div class="col-md-6">
              <div class="card bg-light border-0 shadow rounded-4">
                  <div class="card-body">
                      <blockquote class="blockquote">
                          <p>"Kualitas bukanlah sebuah tindakan, tapi kebiasaan."</p>
                          <footer class="blockquote-footer mt-2">Aristoteles</footer>
                      </blockquote>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Progress & Version Info -->
      <div class="row g-4 mb-4">
          <div class="col-md-6">
              <div class="card border-0 shadow rounded-4">
                  <div class="card-body">
                      <h6 class="fw-bold mb-3"><i class="bi bi-bar-chart-line me-2"></i>Progress Upload Konten</h6>
                      <p class="mb-1">Artikel</p>
                      <div class="progress mb-3" style="height: 8px;">
                          <div class="progress-bar bg-primary" style="width: 75%"></div>
                      </div>
                      <p class="mb-1">Produk</p>
                      <div class="progress mb-3" style="height: 8px;">
                          <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                      <p class="mb-1">Galeri</p>
                      <div class="progress" style="height: 8px;">
                          <div class="progress-bar bg-warning" style="width: 40%"></div>
                      </div>
                  </div>
              </div>
          </div>
  
          <div class="col-md-6">
              <div class="card border-0 shadow rounded-4 border-start border-4 border-primary">
                  <div class="card-body">
                      <h6 class="fw-bold"><i class="bi bi-terminal me-2"></i>Versi Sistem</h6>
                      <p class="mb-1">v1.2.3 - Diperbarui 01 April 2025</p>
                      <small class="text-muted">Cek changelog di halaman pengaturan sistem.</small>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Alert Info -->
      <div class="row">
          <div class="col-md-12">
              <div class="alert alert-info d-flex align-items-center shadow-sm" role="alert">
                  <i class="bi bi-info-circle me-3 fs-4"></i>
                  <div>
                      Selamat datang di Dashboard Admin! Pastikan semua konten website telah diperbarui sebelum akhir bulan ini.
                  </div>
              </div>
          </div>
      </div>
  </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
