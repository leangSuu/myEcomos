<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home-Library</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('style/style.css') }}" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/icon/fontawesome-6.2.0/fontawesome-6.2.0/css/all.css') }}">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<style>
/* =======================
   GLOBAL RESET
======================= */
body {
  overflow-x: hidden;
  background: #fff;
  color: #111;
  font-family: system-ui, sans-serif;
}

section {
  padding: 60px 0;
}

main {
  padding-top: 70px;
}

/* =======================
   HERO MODERN
======================= */
.hero-modern {
  min-height: 85vh;
  display: flex;
  align-items: center;
  padding: 80px 0;
  position: relative;
  overflow: hidden;

 background: #f5f7fb; /* soft light gray-blue */
  color: #111;
}

.hero-modern::before {
  content: "";
  position: absolute;
  width: 500px;
  height: 500px;
  background: rgba(13,110,253,0.25);
  filter: blur(120px);
  top: -100px;
  left: -100px;
  z-index: 0;
}

.hero-modern .row {
  position: relative;
  z-index: 2;
}

.hero-modern .col-md-6 {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.hero-title {
  font-size: clamp(28px, 4vw, 52px);
  font-weight: 700;
}

.hero-desc {
  opacity: 0.8;
  max-width: 500px;
}

.hero-actions {
  margin-top: 20px;
  display: flex;
  gap: 10px;
}

.hero-image-box {
  position: relative;
  display: inline-block;
}

.hero-img {
  width: 100%;
  max-width: 420px;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}

/* Better positioning */
.card1 {
  top: 20px;
  left: -20px;
}

.card2 {
  bottom: 30px;
  right: -20px;
}

/* floating cards */
.float-card {
  position: absolute;
  background: rgba(255,255,255,0.7);
   backdrop-filter: blur(10px);
  padding: 12px 16px;
  border: 1px solid rgba(0,0,0,0.05);
  border-radius: 14px;
  font-size: 13px;
  z-index: 3;
}

.hero-title {
  font-size: clamp(32px, 4vw, 56px);
  font-weight: 800;
  line-height: 1.1;
}

.hero-desc {
  opacity: 0.75;
  max-width: 480px;
  margin-top: 10px;
}

/* =======================
   COUNTER
======================= */
.counter-section {
  text-align: center;
}

.stat-number {
  font-size: 2.2rem;
  font-weight: bold;
  color: #0d6efd;
}

/* =======================
   SWIPER BOOK CARD (FIXED)
======================= */
.swiper {
  padding-bottom: 40px;
}

.swiper-slide {
  display: flex;
  justify-content: center;
}

.swiper-slide .card {
  width: 100%;
  max-width: 300px;
  border: none;
  border-radius: 16px;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.swiper-slide .card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.swiper-slide .card-body {
  padding: 0;
}

.swiper-slide .card-body img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: 0.3s;
}

.swiper-slide .card:hover img {
  transform: scale(1.05);
}

.swiper-slide .card-header {
  border: none;
  background: #fff;
  padding: 12px;
}

.swiper-slide .card-header h4 {
  font-size: 16px;
  margin: 0;
}

.swiper-slide .card-footer {
  border-top: 1px solid #eee;
  background: #fff;
  padding: 10px 12px;
}

.swiper-slide .card-footer a {
  background: #111;
  color: #fff;
  padding: 6px 12px;
  border-radius: 8px;
  text-decoration: none;
}

.swiper-slide .card-footer a:hover {
  background: #0d6efd;
}

/* =======================
   CATEGORY CARDS (MODERN)
======================= */
.category-box {
  position: relative;
  height: 220px;
  border-radius: 16px;
  overflow: hidden;
  cursor: pointer;
}

.category-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.4s;
}

.category-box .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.5);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.category-box:hover img {
  transform: scale(1.1);
}

/* =======================
   MEMBERS
======================= */
.member-card {
  background: #fff;
  border-radius: 16px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 5px 20px rgba(0,0,0,0.05);
  transition: 0.3s;
}

.member-card:hover {
  transform: translateY(-5px);
}

.member-card img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #0d6efd;
}

/* =======================
   SUBSCRIBE (UX CLEAN)
======================= */
.subscribe-ux {
  padding: 80px 0;
}

.subscribe-card {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 40px;
  border-radius: 18px;
  background: #fff;
  box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.subscribe-form-ux {
  display: flex;
  gap: 10px;
}

.subscribe-form-ux input {
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #ddd;
  width: 250px;
}

.subscribe-form-ux button {
  background: #111;
  color: #fff;
  border: none;
  padding: 12px 18px;
  border-radius: 10px;
}

/* =======================
   FOOTER
======================= */
footer {
  background: #111;
  color: #fff;
  padding: 50px 0 20px;
}

footer a {
  color: #aaa;
  text-decoration: none;
}

footer a:hover {
  color: #fff;
}

/* =======================
   MOBILE FIX
======================= */
@media (max-width: 768px) {

  section {
    padding: 40px 0;
  }

  .hero-modern {
    text-align: center;
    padding: 60px 0;
  }

  .subscribe-card {
    flex-direction: column;
    gap: 20px;
  }

  .subscribe-form-ux {
    flex-direction: column;
    width: 100%;
  }

  .subscribe-form-ux input {
    width: 100%;
  }
}
</style>

<body class="home-page">

<!-- NAVBAR (UNCHANGED STYLE) -->
<header>
  <div class="container">
    <nav class="nav-bar w-auto">

      <div class="logo w-auto">
        <a href="/"><span class="m-0">Library</span></a>
      </div>

      <button class="menu-toggle" id="menu-toggle">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="nav-list">
        <li><a href="/">Home</a></li>
        <li><a href="/library">Library</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact</a></li>

        <li>
          <a class="btn-admine" href="/admin/login">Admin</a>
        </li>
      </ul>

    </nav>
  </div>
</header>

<main>

<!-- HERO -->
<section class="hero-modern">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT -->
      <div class="col-md-6" data-aos="fade-right">

        <div class="hero-badge">📚 Digital Library</div>

        <h1 class="hero-title" style="color: #0d6efd;">
          Discover a World of <br>
          <span id="typed"></span>
        </h1>

        <div id="typed-strings">
          <p>Knowledge</p>
          <p>Books</p>
          <p>Ideas</p>
        </div>

        <p class="hero-desc">
          Read anytime, anywhere. Build your knowledge with thousands of books in one place.
        </p>

        <div class="hero-actions">
          <a href="/library" class="btn btn-lg " style="background: black; color: #fff;">Explore Library</a>
          <a href="/about" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>

      </div>

      <!-- RIGHT -->
      <div class="col-md-6 text-center" data-aos="fade-left">

        <div class="hero-image-box">
          <img src="{{ asset('assets/images/3d.jpg') }}" class="hero-img">

          <!-- floating cards -->
          <div class="float-card card1">📖 50K+ Books</div>
          <div class="float-card card2">👥 15K Members</div>
        </div>

      </div>

    </div>
  </div>
</section>


<!-- HERO -->
<!-- <section class="hero-banner">
  <div class="container">
    <div class="row align-items-center hero-grid">

      <div class="col-md-6" data-aos="fade-right">
        <h1 class="fw-bold">
          Welcome to <span id="typed"></span>
        </h1>

        <div id="typed-strings">
          <p>Home Library</p>
          <p>Digital Books</p>
          <p>Reading Zone</p>
        </div>

        <p>Your gateway to knowledge.</p>

        <a href="/library" class="btn btn-primary">Explore</a>
      </div>

      <div class="col-md-6" data-aos="fade-left">
        <img src="{{ asset('assets/images/3d.jpg') }}" class="img-fluid">
      </div>

    </div>
  </div>
</section> -->

<!-- COUNTER -->
<section class="counter-section">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-3 col-6">
        <div class="stat-number" data-target="50000">0</div>
        <p>Books Available</p>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-number" data-target="15000">0</div>
        <p>Members</p>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-number" data-target="5000">0</div>
        <p>E-Books</p>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-number" data-target="25">0</div>
        <p>Years</p>
      </div>

    </div>
  </div>
</section>

<!-- SWIPER (FIXED PROPER STRUCTURE) -->
<section class="py-4">
  <div class="container">
    <h2 class="text-center mb-4">Books</h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- SLIDE 1 -->
        <div class="swiper-slide">
          <div class="card">
            <div class="card-header"><h4>Book Title</h4></div>
            <div class="card-body">
              <img src="{{ asset('assets/images/test-book.png') }}" class="img-fluid">
            </div>
            <div class="card-footer d-flex justify-content-between">
              <span>Author</span>
              <a href="#">Read</a>
            </div>
          </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="swiper-slide">
          <div class="card">
            <div class="card-header"><h4>Book Title</h4></div>
            <div class="card-body">
              <img src="{{ asset('assets/images/test-book.png') }}" class="img-fluid">
            </div>
            <div class="card-footer d-flex justify-content-between">
              <span>Author</span>
              <a href="#">Read</a>
            </div>
          </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="swiper-slide">
          <div class="card">
            <div class="card-header"><h4>Book Title</h4></div>
            <div class="card-body">
              <img src="{{ asset('assets/images/test-book.png') }}" class="img-fluid">
            </div>
            <div class="card-footer d-flex justify-content-between">
              <span>Author</span>
              <a href="#">Read</a>
            </div>
          </div>
        </div>

        <!-- SLIDE 4 -->
        <div class="swiper-slide">
          <div class="card">
            <div class="card-header"><h4>Book Title</h4></div>
            <div class="card-body">
              <img src="{{ asset('assets/images/test-book.png') }}" class="img-fluid">
            </div>
            <div class="card-footer d-flex justify-content-between">
              <span>Author</span>
              <a href="#">Read</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- CATEGORIES -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Categories</h2>

    <div class="row g-4">

      <!-- Fiction -->
      <div class="col-md-4">
        <div class="category-box">
          <img src="{{ asset('assets/images/fiction.jpg') }}">
          <div class="overlay">
            <h3>Fiction</h3>
            <p>Stories & imagination</p>
            <a href="#">Explore</a>
          </div>
        </div>
      </div>

      <!-- Technology -->
      <div class="col-md-4">
        <div class="category-box">
          <img src="{{ asset('assets/images/tech.jpg') }}">
          <div class="overlay">
            <h3>Technology</h3>
            <p>Coding & innovation</p>
            <a href="#">Explore</a>
          </div>
        </div>
      </div>

      <!-- Business -->
      <div class="col-md-4">
        <div class="category-box">
          <img src="{{ asset('assets/images/business.jpg') }}">
          <div class="overlay">
            <h3>Business</h3>
            <p>Finance & growth</p>
            <a href="#">Explore</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MEMBERS -->
<section class="py-5">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Top Members</h2>
      <a href="#">View All →</a>
    </div>

    <div class="row g-4">

      <!-- Member 1 -->
      <div class="col-md-3 col-6">
        <div class="member-card">
          <img src="{{ asset('assets/images/dev.png') }}">
          <h5>Leang Sad</h5>
          <p>Active Reader</p>
          <span>📚 120 Books</span>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="col-md-3 col-6">
        <div class="member-card">
          <img src="{{ asset('assets/images/user2.jpg') }}">
          <h5>Sarah Kim</h5>
          <p>Book Lover</p>
          <span>📚 98 Books</span>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="col-md-3 col-6">
        <div class="member-card">
          <img src="{{ asset('assets/images/user3.jpg') }}">
          <h5>David Lee</h5>
          <p>Researcher</p>
          <span>📚 76 Books</span>
        </div>
      </div>

      <!-- Member 4 -->
      <div class="col-md-3 col-6">
        <div class="member-card">
          <img src="{{ asset('assets/images/user4.jpg') }}">
          <h5>Anna Smith</h5>
          <p>Student</p>
          <span>📚 64 Books</span>
        </div>
      </div>

    </div>

  </div>
</section>

</main>

<!-- SUBSCRIBE -->
<section class="subscribe-ux">
  <div class="container">

    <div class="subscribe-card">

      <!-- LEFT -->
      <div class="subscribe-text">
        <div class="tag">NEWSLETTER</div>
        <h2>Join the Library Community</h2>
        <p>Get curated books, updates, and reading lists — no spam.</p>
      </div>

      <!-- RIGHT -->
      <form class="subscribe-form-ux">
        <input type="email" placeholder="Your email address" required>
        <button type="submit">Join</button>
      </form>

    </div>

  </div>
</section>

<!-- FOOTER (SAME AS LIBRARY PAGE) -->
<footer>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 mb-4">
        <h5 class="footer-title">Library System</h5>
        <p>Your trusted digital library for reading books anytime.</p>
      </div>

      <div class="col-lg-4 mb-4">
        <h6 class="footer-title">Quick Links</h6>
        <div class="footer-links">
          <a href="/">Home</a>
          <a href="/library">Library</a>
          <a href="/about">About</a>
          <a href="/contact">Contact</a>
        </div>
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

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  // Typed
  new Typed("#typed", {
    stringsElement: "#typed-strings",
    typeSpeed: 80,
    backSpeed: 50,
    loop: true
  });

  // AOS
  AOS.init();

  // Navbar
  document.getElementById("menu-toggle").addEventListener("click", () => {
    document.querySelector(".nav-list").classList.toggle("active");
  });

  // Counter
  document.querySelectorAll(".stat-number").forEach(counter => {
    let target = +counter.dataset.target;
    let count = 0;

    let update = () => {
      if (count < target) {
        count += target / 100;
        counter.innerText = Math.ceil(count);
        setTimeout(update, 20);
      } else {
        counter.innerText = target;
      }
    };

    update();
  });

  // SWIPER FIX
  new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });

});
</script>

</body>
</html>