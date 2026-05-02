<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Reading Freely</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('style/style.css') }}" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/icon/fontawesome-6.2.0/fontawesome-6.2.0/css/all.css') }}">

</head>

<style>
body {
  background: #f7f9fb;
}

/* HERO */
.hero-modern {
  padding: 6rem 0;
}

/* HERO IMAGE */
.hero-image img {
  width: 100%;
  max-width: 500px;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* CARDS */
.content-card {
  background: #fff;
  padding: 2.5rem;
  border-radius: 18px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  margin-bottom: 2rem;
  text-align: center;
}

/* CTA */
.btn-read-now {
  display: inline-block;
  padding: 10px 25px;
  border-radius: 30px;
  background: linear-gradient(135deg, #4caf50, #66bb6a);
  color: #fff;
  text-decoration: none;
  transition: 0.3s ease;
}

.btn-read-now:hover {
  transform: translateY(-3px);
}

/* FEATURE CARDS */
.hover-card {
  transition: 0.25s ease;
}

.hover-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.1);
}

.stat-box {
  transition: 0.3s ease;
}

.stat-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.08);
}
</style>

<body>

<!-- NAVBAR -->
<header>
  <div class="container">
    <nav class="nav-bar">

      <div class="logo">
        <a href="/">Library</a>
      </div>

      <ul class="nav-list">
        <li><a href="/">Home</a></li>
        <li><a href="/library">Library</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin/login" class="btn-admine">Admin</a></li>
      </ul>

    </nav>
  </div>
</header>

<!-- HERO -->
<section class="hero-modern position-relative overflow-hidden">

  <!-- background glow -->
  <div class="position-absolute top-0 start-0 w-100 h-100"
       style="background: radial-gradient(circle at 20% 20%, rgba(13,110,253,0.08), transparent 40%),
                          radial-gradient(circle at 80% 30%, rgba(102,16,242,0.08), transparent 40%);">
  </div>

  <div class="container position-relative">
    <div class="row align-items-center g-5">

      <!-- TEXT -->
      <div class="col-lg-6 text-center text-lg-start">

        <span class="badge bg-primary rounded-pill px-3 py-2 mb-3">
          📚 About Our Library
        </span>

        <h1 class="fw-bold display-5 lh-sm">
          Simple Reading,<br>
          <span class="text-primary">Made for Everyone</span>
        </h1>

        <p class="text-muted mt-3 fs-6">
          Discover books instantly with a clean, fast, and distraction-free reading experience.
          No login required — just open and read.
        </p>

        <div class="mt-4 d-flex gap-2 justify-content-center justify-content-lg-start">

          <a href="/library" class="btn btn-primary px-4 py-2 rounded-pill">
            📖 Start Reading
          </a>

          <a href="/contact" class="btn btn-outline-dark px-4 py-2 rounded-pill">
            Contact Us
          </a>

        </div>

      </div>

      <!-- IMAGE -->
      <div class="col-lg-6 text-center">

        <div class="position-relative d-inline-block">

          <!-- glow behind image -->
          <div class="position-absolute top-50 start-50 translate-middle"
               style="width: 300px; height: 300px; background: rgba(13,110,253,0.15); filter: blur(60px); border-radius: 50%;">
          </div>

          <img src="{{ asset('assets/images/about.png') }}"
               class="img-fluid position-relative"
               style="max-height: 380px; border-radius: 20px;">

        </div>

      </div>

    </div>
  </div>
</section>

<!-- 📊 STATS -->
<section class="py-4">
  <div class="container">
    <div class="row g-3 text-center">

      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 stat-box">
          <h2 class="text-primary fw-bold">10K+</h2>
          <p class="mb-0 text-muted">Books Available</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 stat-box">
          <h2 class="text-success fw-bold">24/7</h2>
          <p class="mb-0 text-muted">Access Anytime</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 stat-box">
          <h2 class="text-warning fw-bold">100%</h2>
          <p class="mb-0 text-muted">Free Reading</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STORY -->
<section class="container">
  <div class="content-card">
    <h2>Our Story</h2>
    <p>We built this as a simple reading platform for everyone.</p>
  </div>
</section>

<!-- FEATURES -->
<section class="container">
  <div class="content-card">

    <h3>What Makes Us Different</h3>

    <div class="row mt-4 g-3">

      <div class="col-md-4">
        <div class="p-3 border rounded-4 hover-card">
          <i class="bi bi-unlock text-primary fs-3"></i>
          <h5 class="mt-2">Free Access</h5>
          <p class="text-muted">No accounts needed</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-3 border rounded-4 hover-card">
          <i class="bi bi-layout-text-window text-success fs-3"></i>
          <h5 class="mt-2">Clean UI</h5>
          <p class="text-muted">Focus on reading only</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-3 border rounded-4 hover-card">
          <i class="bi bi-book text-warning fs-3"></i>
          <h5 class="mt-2">Real Books</h5>
          <p class="text-muted">Proper library experience</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- JOURNEY -->
<section class="container">
  <div class="content-card">

    <h3>Our Journey</h3>

    <div class="row mt-4 text-start">

      <div class="col-md-4">
        <h6 class="text-primary">2024</h6>
        <p class="text-muted">Idea started as simple reading platform.</p>
      </div>

      <div class="col-md-4">
        <h6 class="text-primary">2025</h6>
        <p class="text-muted">Library system built and structured.</p>
      </div>

      <div class="col-md-4">
        <h6 class="text-primary">Now</h6>
        <p class="text-muted">Improving UX and expanding collection.</p>
      </div>

    </div>

  </div>
</section>

<!-- NOTE -->
<section class="container">
  <div class="content-card">
    <h3>A Note From Us</h3>
    <p>We hope you enjoy reading here.</p>
  </div>
</section>

<!-- CTA -->
<div class="text-center my-4">
  <a href="/library" class="btn-read-now">
    Start Reading Now
  </a>
</div>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 mb-4">
        <h5>Library System</h5>
        <p>Your trusted digital library for reading books anytime.</p>
      </div>

      <div class="col-lg-4 mb-4">
        <h6>Quick Links</h6>
        <a href="/">Home</a><br>
        <a href="/library">Library</a>
      </div>

      <div class="col-lg-4 mb-4">
        <h6>Contact</h6>
        <p>Phnom Penh</p>
      </div>

    </div>

    <hr>
    <p class="text-center">&copy; {{ date('Y') }} Library</p>
  </div>
</footer>

</body>
</html>