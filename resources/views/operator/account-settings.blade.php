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
            background-color: #0f172a;
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
    <style>
      /* Konten modern style */
.content-card {
    background-color: #1e293b;
    border-radius: 12px;
    padding: 30px;
    color: #f1f5f9;
    box-shadow: 0 0 10px rgba(15, 23, 42, 0.2);
    margin-bottom: 30px;
}

.content-card h4,
.content-card h5 {
    color: #f8fafc;
    margin-bottom: 20px;
    font-weight: bold;
}

.content-card label {
    color: #cbd5e1;
}

.content-card .form-control {
    background-color: #0f172a;
    border: 1px solid #334155;
    color: #f8fafc;
}

.content-card .form-control:focus {
    background-color: #0f172a;
    border-color: #3b82f6;
    box-shadow: none;
}

.btn-primary {
    background-color: #3b82f6;
    border: none;
    font-weight: 500;
}

.btn-primary:hover {
    background-color: #2563eb;
}

.btn-warning {
    background-color: #facc15;
    border: none;
    color: #0f172a;
    font-weight: 500;
}

.btn-warning:hover {
    background-color: #eab308;
    color: #0f172a;
}

.alert {
    border-radius: 8px;
    padding: 15px;
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
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-tag"></i> Tag</a>
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
            <span class="fw-semibold fs-5 text-white">Setting Profile Perusahaan</span>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-circle fs-4 text-primary me-2"></i>
                <span class="fw-semibold text-white">Admin</span>
            </div>
        </nav>

        <div class="container mt-4">
          <div class="content-card">
              <h4>Pengaturan Akun</h4>
      
              @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul class="mb-0">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
      
              <form action="{{ route('akun.update') }}" method="POST" class="mb-4">
                  @csrf
                  <div class="mb-3">
                      <label>Nama</label>
                      <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                  </div>
                  <div class="mb-3">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                  </div>
                  <button class="btn btn-primary">Simpan Perubahan</button>
              </form>
      
              <hr class="my-4" style="border-color: #334155;">
      
              <h5>Ubah Password</h5>
              <form action="{{ route('akun.updatePassword') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label>Password Lama</label>
                      <input type="password" name="current_password" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label>Password Baru</label>
                      <input type="password" name="new_password" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label>Konfirmasi Password Baru</label>
                      <input type="password" name="new_password_confirmation" class="form-control" required>
                  </div>
                  <button class="btn btn-warning">Ubah Password</button>
              </form>
          </div>
      </div>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
