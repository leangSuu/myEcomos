<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library</title> <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<style>
    /* BOOK CARD */
    .book-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        transition: 0.3s ease;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    }

    .book-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    }

    /* IMAGE */
    .book-img {
        height: 240px;
        position: relative;
        overflow: hidden;
    }

    .book-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.4s ease;
    }

    .book-card:hover img {
        transform: scale(1.08);
    }

    /* BADGE */
    .badge-cat {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #0d6efd;
        color: white;
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 999px;
    }

    /* CONTENT */
    .book-body {
        padding: 12px 14px;
    }

    .title {
        font-size: 15px;
        font-weight: 600;
    }

    .meta {
        font-size: 13px;
        color: #666;
    }

    /* DETAILS */
    .details {
        font-size: 12px;
        color: #777;
        margin-top: 8px;
        line-height: 1.5;
    }

    /* BUTTON */
    .read-btn {
        display: inline-block;
        margin-top: 10px;
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        color: white;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 13px;
        text-decoration: none;
    }

    .read-btn:hover {
        transform: scale(1.05);
    }

    .no-file {
        font-size: 12px;
        color: #aaa;
    }

    .stat-box {
        background: #fff;
        border-radius: 14px;
        padding: 18px;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .stat-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .no-file {
        color: #ccc;
        font-size: 14px;
    }

    /* CONTENT */
    .book-content {
        padding: 12px 14px;
    }

    .title {
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .author {
        font-size: 13px;
        color: #777;
    }

    /* FALLBACK */
    .no-img {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: #999;
        font-size: 14px;
    }

    .stat-box {
        transition: 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .stat-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    }

    .stat-icon {
        width: 55px;
        height: 55px;
    }

    .filter-bar {
        transition: 0.3s ease;
    }

    .filter-bar:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    }

    .filter-select {
        min-width: 160px;
    }

    /* FILTER BAR */
    .filter-bar {
        transition: 0.3s ease;
    }

    /* CATEGORY PILLS */
    .filter-pills .pill {
        text-decoration: none;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 14px;
        border: 1px solid #e7e7e7;
        color: #555;
        background: #fff;
        transition: 0.25s ease;
    }

    .filter-pills .pill:hover {
        background: #f3f6ff;
        color: #0d6efd;
        transform: translateY(-2px);
    }

    /* ACTIVE STATE */
    .filter-pills .pill.active {
        background: #0d6efd;
        color: white;
        border-color: #0d6efd;
    }

    /* SORT BOX */
    .sort-box {
        min-width: 140px;
        border-radius: 10px;
    }

    /* APPLY BUTTON (IMPORTANT UX CHANGE) */
    .apply-btn {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        color: white;
        border: none;
        padding: 6px 14px;
        border-radius: 10px;
        font-size: 14px;
        transition: 0.25s ease;
        display: flex;
        align-items: center;
    }

    .apply-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(13, 110, 253, 0.25);
    }
</style>

<body class="library"> <!-- NAVBAR -->
    <header>
        <div class="container">
            <div class="row">
                <nav class="nav-bar w-auto">
                    <div class="logo w-auto"> <a href="/"><span>Library</span></a> </div> <button class="menu-toggle" id="menu-toggle"> <i class="fas fa-bars"></i> </button>
                    <ul class="nav-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/library">Library</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a class="btn-admine" href="/admin/login">Admin</a></li>
                    </ul>
                </nav>
            </div> <!-- SEARCH -->
            <div class="search-library mt-3">
                <form method="GET" action="/library">
                    <div class="search-wrapper"> <i class="bi bi-search search-icon"></i> <input type="text" name="q" value="{{ $search ?? '' }}" placeholder="Search books or authors..." class="search-input" /> <button type="submit" class="search-btn"> Search </button> </div>
                </form>
            </div>
        </div>
    </header> <!-- HERO -->
    <section class="hero-library-section py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold">Library Collection</h1>
                    <p class="text-muted"> Explore thousands of books, documents, and digital resources. </p>
                </div>
            </div>
        </div>
    </section> <!-- 📊 STATS (IMPROVED UX) -->
    <section class="py-4">
        <div class="container">
            <div class="row g-3"> <!-- Card -->
                <div class="col-12 col-md-4">
                    <div class="stat-box p-4 rounded-4 bg-white d-flex align-items-center gap-3">
                        <div class="stat-icon bg-primary text-white rounded-circle d-flex justify-content-center align-items-center"> <i class="bi bi-book fs-4"></i> </div>
                        <div>
                            <h4 class="mb-0 fw-bold">{{ count($books) }}</h4> <small class="text-muted">Books Found</small>
                        </div>
                    </div>
                </div> <!-- Card -->
                <div class="col-12 col-md-4">
                    <div class="stat-box p-4 rounded-4 bg-white d-flex align-items-center gap-3">
                        <div class="stat-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center"> <i class="bi bi-collection fs-4"></i> </div>
                        <div>
                            <h4 class="mb-0 fw-bold">Digital</h4> <small class="text-muted">Library Type</small>
                        </div>
                    </div>
                </div> <!-- Card -->
                <div class="col-12 col-md-4">
                    <div class="stat-box p-4 rounded-4 bg-white d-flex align-items-center gap-3">
                        <div class="stat-icon bg-warning text-white rounded-circle d-flex justify-content-center align-items-center"> <i class="bi bi-clock-history fs-4"></i> </div>
                        <div>
                            <h4 class="mb-0 fw-bold">24/7</h4> <small class="text-muted">Available Access</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- 🔎 FILTER BAR (PRO UX VERSION) -->
    <section class="py-3">
        <div class="container">
            <div class="filter-bar p-3 rounded-4 bg-white shadow-sm">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3"> <!-- LEFT TITLE -->
                    <div class="d-flex align-items-center gap-2"> <span class="badge bg-primary rounded-pill px-3 py-2"> Library Control </span> <small class="text-muted">Filter & organize books</small> </div> <!-- RIGHT CONTROLS -->
                    <div class="d-flex flex-wrap align-items-center gap-2"> <!-- CATEGORY PILLS (NOT DROPDOWN STYLE ANYMORE) -->
                        <div class="filter-pills d-flex gap-2 flex-wrap"> 
                        <a href="?category=all" class="pill {{ request('category','all') == 'all' ? 'active' : '' }}"> All </a> 
                        <a href="?category=Fiction" class="pill {{ request('category') == 'Fiction' ? 'active' : '' }}"> Fiction </a> 
                        <a href="?category=Non-Fiction" class="pill {{ request('category') == 'Non-Fiction' ? 'active' : '' }}"> Non-Fiction </a> 
                        <a href="?category=Science" class="pill {{ request('category') == 'Science' ? 'active' : '' }}"> Science </a> 
                        <a href="?category=Technology" class="pill {{ request('category') == 'Technology' ? 'active' : '' }}"> Technology </a> 
                        <a href="?category=History" class="pill {{ request('category') == 'History' ? 'active' : '' }}"> History </a> 
                        <a href="?category=Education" class="pill {{ request('category') == 'Education' ? 'active' : '' }}"> Education </a> 
                        <a href="?category=Biography" class="pill {{ request('category') == 'Biography' ? 'active' : '' }}"> Biography </a> 
                        <a href="?category=Business" class="pill {{ request('category') == 'Business' ? 'active' : '' }}"> Business </a> 
                    </div> <!-- SORT --> <select class="form-select form-select-sm sort-box">
                            <option>Latest</option>
                            <option>Oldest</option>
                            <option>Popular</option>
                        </select> <!-- APPLY BUTTON (UPGRADED UX) --> <button class="apply-btn"> <i class="bi bi-funnel-fill me-1"></i> Apply </button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- BOOKS -->
    <section class="book-store my-4">
        <div class="container">
            <div class="row g-4"> @forelse($books as $row) <div class="col-6 col-md-4 col-lg-3">
                    <div class="book-card h-100"> <!-- IMAGE -->
                        <div class="book-img"> @if($row->img) <img src="{{ asset('uploads/'.$row->img) }}"> @else <div class="d-flex justify-content-center align-items-center h-100 text-muted"> No Image </div> @endif <!-- BADGE -->
                            <div class="badge-cat"> {{ $row->category ?? 'Book' }} </div>
                        </div> <!-- BODY -->
                        <div class="book-body d-flex flex-column">
                            <div class="title text-truncate"> {{ $row->title }} </div>
                            <div class="meta text-truncate"> ✍ {{ $row->author }} </div> <!-- DETAILS (clean spacing fix) -->
                            <div class="details mt-2">
                                <div>📘 <b>ISBN:</b> {{ $row->ibsn ?? 'N/A' }}</div>
                                <div>🏢 <b>Publisher:</b> {{ $row->publisher ?? 'N/A' }}</div>
                                <div>📅 <b>Date:</b> {{ $row->publish_date ?? 'N/A' }}</div>
                                <div>🏷 <b>Tag:</b> {{ $row->tag ?? 'N/A' }}</div>
                            </div> <!-- PUSH BUTTON DOWN -->
                            <div class="mt-auto"> @if($row->pdf) <a href="{{ asset('uploads/'.$row->pdf) }}" target="_blank" class="read-btn w-100 text-center d-block"> 📖 Read Book </a> @else <div class="no-file mt-2">No PDF available</div> @endif </div>
                        </div>
                    </div>
                </div> @empty <div class="col-12 text-center py-5">
                    <h4>No Books Found</h4>
                    <p class="text-muted">Add books from admin panel</p>
                </div> @endforelse </div> <!-- PAGINATION HERE -->
            <div class="d-flex justify-content-center mt-4"> @if ($books->hasPages()) <div class="d-flex justify-content-center mt-4">
                    <nav>
                        <ul class="pagination"> {{-- Previous --}}
                            <li class="page-item {{ $books->onFirstPage() ? 'disabled' : '' }}"> <a class="page-link" href="{{ $books->previousPageUrl() }}">‹</a> </li> {{-- Pages --}} @for ($i = 1; $i <= $books->lastPage(); $i++) <li class="page-item {{ $books->currentPage() == $i ? 'active' : '' }}"> <a class="page-link" href="{{ $books->url($i) }}"> {{ $i }} </a> </li> @endfor {{-- Next --}}
                                <li class="page-item {{ !$books->hasMorePages() ? 'disabled' : '' }}"> <a class="page-link" href="{{ $books->nextPageUrl() }}">›</a> </li>
                        </ul>
                    </nav>
                </div> @endif </div>
        </div>
    </section> <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Library System</h5>
                    <p>Your trusted digital library for reading books anytime.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="footer-title">Quick Links</h6>
                    <div class="footer-links"> <a href="/">Home</a> <a href="/library">Library</a> <a href="/about">About</a> <a href="/contact">Contact</a> </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="footer-title">Contact</h6>
                    <p>Phnom Penh, Cambodia</p>
                    <p>library@email.com</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Library System</p>
            </div>
        </div>
    </footer>
    <script>
        const btn = document.getElementById("menu-toggle");
        const nav = document.querySelector(".nav-list");
        if (btn && nav) {
            btn.addEventListener("click", () => {
                nav.classList.toggle("active");
            });
        }
    </script>
</body>

</html>