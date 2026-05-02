



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Library</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>

<style>
body.admin-page {
  background: #f5f7fb;
  font-family: "Segoe UI", sans-serif;
}

/* ================= SIDEBAR (UNCHANGED) ================= */
.sidebar {
  width: 250px;
  height: 100vh;
  position: fixed;
  background: #0f172a;
  color: white;
  padding: 20px;
}

.sidebar-header h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 25px;
}

.sidebar-menu .nav-link {
  color: #cbd5e1;
  padding: 10px 12px;
  border-radius: 10px;
  margin-bottom: 6px;
  transition: 0.3s;
}

.sidebar-menu .nav-link:hover {
  background: #1e293b;
  color: white;
}

.sidebar-menu .nav-link.active {
  background: #2563eb;
  color: white;
}

/* ================= MAIN ================= */
.main-content {
  margin-left: 250px;
  padding: 20px;
}

/* ================= TOP NAVBAR (UNCHANGED) ================= */
.top-navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: white;
  padding: 12px 18px;
  border-radius: 12px;
  margin-bottom: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.navbar-right i {
  font-size: 18px;
  margin-left: 15px;
  cursor: pointer;
  color: #555;
}

/* ================= DASHBOARD CARD ================= */
.dashboard-card {
  background: white;
  border-radius: 16px;
  padding: 20px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.05);
  transition: 0.3s;
}

.dashboard-card:hover {
  transform: translateY(-6px);
}


/* ================= BOOK CARD FIX ONLY ================= */
.book-card {
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
  transition: 0.3s;

  display: flex;
  flex-direction: column;
  height: 100%;
}

.book-card:hover {
  transform: translateY(-8px);
}

.book-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.book-body {
  padding: 12px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.book-body h5 {
  font-size: 16px;
  font-weight: 600;
}

.book-body p {
  font-size: 13px;
  margin-bottom: 4px;
  color: #555;
}

.book-actions {
  margin-top: auto;
  display: flex;
  gap: 8px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
  .sidebar {
    left: -260px;
    position: fixed;
    transition: 0.3s ease;
  }

  .main-content {
    margin-left: 0;
  }
}

/* OVERLAY */
.sidebar-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.4);
  display: none;
  z-index: 998;
}

/* ACTIVE OVERLAY */
.sidebar-overlay.active {
  display: block;
}

/* MOBILE SIDEBAR SLIDE */
@media (max-width: 992px) {

  .sidebar {
    left: -260px;
    position: fixed;
    transition: 0.3s ease;
    z-index: 999;
  }

  .sidebar.active {
    left: 0;
  }

  .main-content {
    margin-left: 0;
  }
}

.sidebar-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.4);
  display: none;
  z-index: 998;
}

.sidebar-overlay.active {
  display: block;
}

.menu-toggle {
  font-size: 20px;
  border: none;
}
</style>

<body class="admin-page">

<!-- SIDEBAR (UNCHANGED) -->
<div class="sidebar">

  <div class="sidebar-header">
    <h3><i class="bi bi-puzzle"></i> Library Admin</h3>
  </div>

  <div class="sidebar-menu">
    <nav class="nav flex-column">

      <a class="nav-link active" href="/admin/dashboard">
        <i class="bi bi-speedometer2"></i> Dashboard
      </a>

      <a class="nav-link" href="/library">
        <i class="bi bi-book"></i> Library
      </a>

      <a class="nav-link text-danger" href="/admin/logout">
        <i class="bi bi-box-arrow-right"></i> Logout
      </a>

    </nav>
  </div>

</div>
<!-- ✅ OVERLAY (MUST BE OUTSIDE SIDEBAR) -->
  <div class="sidebar-overlay"></div>

<!-- MAIN -->
<div class="main-content">

  <!-- TOP NAVBAR (UNCHANGED EXACTLY) -->
 <nav class="top-navbar">

  <!-- LEFT SIDE -->
  <div class="d-flex align-items-center gap-2 flex-grow-1">

    <!-- MENU BUTTON -->
  <button class="menu-toggle btn btn-light d-md-none">
  <i class="bi bi-list"></i>
</button>
    <!-- SEARCH -->
    <i class="bi bi-search text-muted"></i>
    <input type="text" class="form-control form-control-sm"
           placeholder="Search books, authors..." style="max-width:300px;">
  </div>

  <!-- RIGHT SIDE -->
  <div class="navbar-right d-flex align-items-center gap-3">

   

    <div class="position-relative">
      <i class="bi bi-bell fs-5"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge bg-danger">
        3
      </span>
    </div>

    <div class="d-flex align-items-center gap-2">
      <i class="bi bi-person-circle fs-4"></i>
      <small class="text-muted">Admin</small>
    </div>

  </div>

</nav>

  <!-- CONTENT -->
<div class="content-wrapper">

  <!-- HEADER + ACTIONS -->
  <div class="d-flex justify-content-between align-items-center mb-4">

    <div>
      <h2 class="mb-0">Dashboard Overview</h2>
      <small class="text-muted">Manage your library system</small>
    </div>

    <div class="d-flex gap-2">

      <a href="/admin/books" class="btn btn-warning btn-sm">
        <i class="bi bi-gear"></i> Manage Books
      </a>

      <a href="/admin/books/create" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg"></i> Add Book
      </a>

    </div>

  </div>



  
  <!-- STATS -->
<div class="row mb-4 g-3">

  <!-- TOTAL BOOKS -->
  <div class="col-md-3">
    <div class="dashboard-card">
      <div class="card-icon green">
        <i class="fas fa-book"></i>
      </div>
      <div class="card-value">{{ $totalBooks }}</div>
      <div class="card-title">Total Books</div>
    </div>
  </div>

  <!-- AVAILABLE BOOKS -->
  <div class="col-md-3">
    <div class="dashboard-card">
      <div class="card-icon" style="background: linear-gradient(135deg,#3b82f6,#2563eb);">
        <i class="fas fa-book-open"></i>
      </div>
      <div class="card-value">{{ $availableBooks ?? 0 }}</div>
      <div class="card-title">Available Books</div>
    </div>
  </div>

  <!-- PDF FILES -->
  <div class="col-md-3">
    <div class="dashboard-card">
      <div class="card-icon" style="background: linear-gradient(135deg,#f59e0b,#d97706);">
        <i class="fas fa-file-pdf"></i>
      </div>
      <div class="card-value">{{ $pdfBooks ?? 0 }}</div>
      <div class="card-title">PDF Books</div>
    </div>
  </div>

  <!-- CATEGORIES -->
  <div class="col-md-3">
    <div class="dashboard-card">
      <div class="card-icon" style="background: linear-gradient(135deg,#a855f7,#7c3aed);">
        <i class="fas fa-layer-group"></i>
      </div>
      <div class="card-value">{{ $totalCategories ?? 0 }}</div>
      <div class="card-title">Categories</div>
    </div>
  </div>

</div>

  <!-- BOOK LIST -->
<h3 class="mb-3">Book Store</h3>

<div class="row g-4">

  @forelse($books as $row)

  <div class="col-md-4 col-lg-3">

    <div class="book-card">

      <!-- IMAGE -->
      @if($row->img)
      <img src="{{ asset('uploads/'.$row->img) }}">
      @else
      <div class="text-center p-5">No Image</div>
      @endif

      <!-- BODY -->
      <div class="book-body">

        <h5>{{ $row->title }}</h5>

        <p><b>Author:</b> {{ $row->author }}</p>
        <p><b>Category:</b> {{ $row->category }}</p>
        <p><b>Publisher:</b> {{ $row->publisher }}</p>
        <p><b>Date:</b> {{ $row->publish_date }}</p>

        <!-- ACTIONS -->
        <div class="book-actions">

          @if($row->pdf)
          <a href="{{ asset('uploads/'.$row->pdf) }}"
             target="_blank"
             class="btn btn-primary btn-sm">
            Read
          </a>
          @else
          <button class="btn btn-secondary btn-sm" disabled>No PDF</button>
          @endif

          <a href="{{ route('admin.books.index') }}"
             class="btn btn-warning btn-sm">
            Manage
          </a>

        </div>

      </div>

    </div>

  </div>

  @empty
  <p class="text-muted">No books found.</p>
  @endforelse

</div>

</div>

<script>
const sidebar = document.querySelector(".sidebar");
const overlay = document.querySelector(".sidebar-overlay");
const toggle = document.querySelector(".menu-toggle");

if (toggle && sidebar && overlay) {
  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("active");
    overlay.classList.toggle("active");
  });

  overlay.addEventListener("click", () => {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
  });
}
</script>
</body>
</html>