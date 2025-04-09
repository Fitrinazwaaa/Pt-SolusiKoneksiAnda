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

        <!-- Article List Section -->
        <div class="container p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-primary">Article List</h2>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <button class="btn btn-primary btn-modern shadow-sm" data-bs-toggle="modal"
                data-bs-target="#tambahModulModal">
                <i class="bi bi-plus-circle me-1"></i> ADD NEW
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
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%;">Actions</th>
                            <th>Post Name</th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $index => $article)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editArticleModal{{ $article->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                
                                    <!-- Tombol Delete -->
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                        style="display:inline-block" onsubmit="return confirm('Yakin hapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>                                    
                                </td>
                                <td>{{ $article->post_name }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @if ($article->status === 'publish')
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>
                            </tr>
                
                            {{-- Modal Edit Artikel --}}
                            <div class="modal fade" id="editArticleModal{{ $article->id }}" tabindex="-1"
                                aria-labelledby="editArticleModalLabel{{ $article->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                        
                                            <input type="text" name="post_name" class="form-control" value="{{ $article->post_name }}" required>
                                            <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
                                            <textarea name="content" class="form-control">{{ $article->content }}</textarea>
                                        
                                            <input type="text" name="meta_keyword" class="form-control" value="{{ $article->meta_keyword }}">
                                            <textarea name="meta_description" class="form-control">{{ $article->meta_description }}</textarea>
                                        
                                            <input type="file" name="title_image" class="form-control">
                                            @if($article->title_image)
                                                <img src="{{ asset('storage/' . $article->title_image) }}" width="100" class="mt-2">
                                            @endif
                                        
                                            <select name="status" class="form-select">
                                                <option value="publish" {{ $article->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                                <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                            </select>
                                        
                                            <div class="mt-2">
                                                @foreach (['travel', 'project', 'technology', 'life style', 'design'] as $tag)
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tags" value="{{ $tag }}"
                                                            {{ $article->tags == $tag ? 'checked' : '' }}>
                                                        <label class="form-check-label">{{ ucfirst($tag) }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        
                                            <button type="submit" class="btn btn-success mt-3">Update Artikel</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada artikel.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- Modal Tambah Artikel -->
<div class="modal fade" id="tambahModulModal" tabindex="-1" aria-labelledby="tambahModulModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahModulModalLabel">Tambah Artikel Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Post Name</label>
                        <input type="text" name="post_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title Image</label>
                        <input type="file" name="title_image" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="draft">Draft</option>
                            <option value="publish">Published</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Tags</label>
                        @php
                            $tags = ['travel', 'project', 'technology', 'life style', 'design'];
                        @endphp
                        @foreach ($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tags" id="tag-{{ $tag }}" value="{{ $tag }}">
                                <label class="form-check-label" for="tag-{{ $tag }}">{{ ucfirst($tag) }}</label>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
