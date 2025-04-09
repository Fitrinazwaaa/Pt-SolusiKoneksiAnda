<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Modul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
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

        .container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .btn-modern {
            border-radius: 12px;
            padding: 0.6rem 1.2rem;
            transition: all 0.2s ease-in-out;
        }

        .btn-modern:hover {
            transform: scale(1.03);
        }

        .form-control,
        .form-select {
            border-radius: 12px;
            padding: 0.55rem 0.75rem;
        }

        table th,
        table td {
            vertical-align: middle !important;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }

        .modal-content {
            border-radius: 18px;
        }

        .page-link {
            border-radius: 10px !important;
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

    <!-- Sidebar -->
    <div class="sidebar">
        <h4><i class="bi bi-speedometer2"></i> Admin Panel</h4>

        <div class="nav-section">
            <div class="nav-section-title">Dashboard</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-house"></i> Dashboard</a>
                </li>
            </ul>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">Master</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#akunMenu" role="button">
                        <i class="bi bi-people"></i> Akun
                    </a>
                    <div class="collapse" id="akunMenu">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i>
                                    User</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person-badge"></i>
                                    Admin</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#articleMenu" role="button">
                        <i class="bi bi-journal-text"></i> Article
                    </a>
                    <div class="collapse" id="articleMenu">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-tag"></i> Tag</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('article') }}"><i class="bi bi-file-text"></i>
                                    Article</a></li>
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
                    <a class="nav-link" href="#"><i class="bi bi-gear"></i> Setting</a>
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

    <!-- Main Content -->
    <div class="main-content p-4">
        <!-- Navbar -->
        <nav class="navbar navbar-dashboard d-flex justify-content-between align-items-center mb-4">
            <span class="fw-semibold fs-5 text-dark">Dashboard Admin</span>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-circle fs-4 text-primary me-2"></i>
                <span class="fw-semibold text-dark">Admin</span>
            </div>
        </nav>

        <!-- Module List Section -->
        <div class="container p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-primary">Module List</h2>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <button class="btn btn-primary btn-modern shadow-sm" data-bs-toggle="modal"
                    data-bs-target="#tambahModulModal">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Modul
                </button>
                <div class="input-group shadow-sm" style="max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Cari nama modul..." id="searchInput">
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="table-responsive mb-4">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 10%;">Actions</th>
                            <th>Module Name</th>
                            <th>Module Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($modules as $index => $module)
                            <tr>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-sm btn-outline-warning me-1" title="Edit"
                                        data-bs-toggle="modal" data-bs-target="#editModulModal{{ $module->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <!-- Tombol Delete -->
                                    <form action="{{ route('modules.destroy', $module->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger me-1" title="Delete"
                                            onclick="return confirm('Yakin ingin menghapus modul ini?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                    <!-- Tombol Tambah Object -->
                                    <button class="btn btn-sm btn-outline-primary" title="Tambah Object"
                                        data-bs-toggle="modal" data-bs-target="#tambahObjectModal{{ $module->id }}">
                                        <i class="bi bi-plus-circle"></i>
                                    </button>

                                </td>
                                <td>{{ $module->name }}</td>
                                <td>{{ $module->description }}</td>
                            </tr>

                            <!-- Modal Edit Modul -->
                            <div class="modal fade" id="editModulModal{{ $module->id }}" tabindex="-1"
                                aria-labelledby="editModulModalLabel{{ $module->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content shadow">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-semibold"
                                                id="editModulModalLabel{{ $module->id }}">Edit Modul</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('modules.update', $module->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="moduleImage{{ $module->id }}"
                                                            class="form-label">Module Image</label>

                                                        @if ($module->image)
                                                            <div class="mb-2">
                                                                <img src="{{ asset('storage/' . $module->image) }}"
                                                                    alt="Module Image" width="100"
                                                                    class="rounded shadow-sm">
                                                            </div>
                                                        @endif

                                                        <input type="file" class="form-control"
                                                            id="moduleImage{{ $module->id }}" name="image">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="indexOrder{{ $module->id }}"
                                                            class="form-label">Index Order</label>
                                                        <input type="number" class="form-control"
                                                            id="indexOrder{{ $module->id }}" name="index_order"
                                                            value="{{ $module->index_order }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="moduleName{{ $module->id }}"
                                                        class="form-label">Module Name</label>
                                                    <input type="text" class="form-control"
                                                        id="moduleName{{ $module->id }}" name="name"
                                                        value="{{ $module->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="moduleDescription{{ $module->id }}"
                                                        class="form-label">Module Description</label>
                                                    <textarea class="form-control" id="moduleDescription{{ $module->id }}" name="description" rows="3">{{ $module->description }}</textarea>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-modern">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada modul.</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

        <!-- Modal Tambah Modul -->
        <div class="modal fade" id="tambahModulModal" tabindex="-1" aria-labelledby="tambahModulModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="modal-title fw-semibold" id="tambahModulModalLabel">Tambah Modul</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('modules.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="moduleImage" class="form-label">Module Image</label>
                                    <input type="file" class="form-control" id="moduleImage" name="image">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="indexOrder" class="form-label">Index Order</label>
                                    <input type="number" class="form-control" id="indexOrder" name="index_order"
                                        value="0">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="moduleName" class="form-label">Module Name</label>
                                <input type="text" class="form-control" id="moduleName" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="moduleDescription" class="form-label">Module Description</label>
                                <textarea class="form-control" id="moduleDescription" name="description" rows="3" required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-modern">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Object -->
        <div class="modal fade" id="tambahObjectModal{{ $module->id }}" tabindex="-1"
            aria-labelledby="tambahObjectModalLabel{{ $module->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahObjectModalLabel{{ $module->id }}">Tambah Object untuk
                            {{ $module->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('module-objects.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="module_id" value="{{ $module->id }}">

                            @for ($i = 0; $i < $module->index_order; $i++)
                                <div class="border rounded p-3 mb-4">
                                    <h6 class="mb-3">Object {{ $i + 1 }}</h6>
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Object Image</label>
                                            <input type="file" name="objects[{{ $i }}][image]"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Object Name</label>
                                            <input type="text" name="objects[{{ $i }}][name]"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Icon CSS</label>
                                            <input type="text" name="objects[{{ $i }}][icon]"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Object Description</label>
                                            <textarea name="objects[{{ $i }}][description]" class="form-control" rows="2"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label">Index Order</label>
                                            <input type="number" name="objects[{{ $i }}][index_order]"
                                                class="form-control" value="{{ $i + 1 }}">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label">Parent Module</label>
                                            <select name="objects[{{ $i }}][parent_module]"
                                                class="form-select">
                                                <option value="">Pilih...</option>
                                                @foreach ($modules as $m)
                                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            name="objects[{{ $i }}][is_active]" value="1" checked>
                                        <label class="form-check-label">Aktif</label>
                                    </div>
                                </div>
                            @endfor

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan Object</button>
                            </div>
                        </form>

                        <!-- Tabel Object -->
                        <hr class="my-4" />
                        <h6>Daftar Object</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th>Actions</th>
                                        <th>Object Name</th>
                                        <th>Object Description</th>
                                        <th>Index</th>
                                        <th>Parent Module</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($module->objects as $object)
                                      <tr>
                                          <td>
                                              <form action="{{ route('module-objects.destroy', $object->id) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-sm btn-danger btn-icon"
                                                      onclick="return confirm('Hapus object ini?')">
                                                      <i class="bi bi-trash"></i>
                                                  </button>
                                              </form>
                                          </td>
                                          <td>{{ $object->object_name }}</td>
                                          <td>{{ $object->object_description }}</td>
                                          <td>{{ $object->index_order }}</td>
                                          <td>{{ $object->parentModule->name ?? '-' }}</td>
                                          <td>
                                              @if ($object->is_active)
                                                  <span class="badge bg-success">Aktif</span>
                                              @else
                                                  <span class="badge bg-secondary">Nonaktif</span>
                                              @endif
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
