<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - Reading Freely</title>

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('style/style.css') }}" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/icon/fontawesome-6.2.0/fontawesome-6.2.0/css/all.css') }}" />

  <style>
    :root {
      --primary: #4caf50;
      --bg: #f7f9fb;
      --text: #2c2c2c;
      --card: #ffffff;
      --radius: 16px;
      --shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    body {
      background: var(--bg);
      font-family: 'Segoe UI', sans-serif;
      color: var(--text);
    }

    .hero {
      position: relative;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      margin-top: 90px;
    }

    .hero img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.75);
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.25);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: white;
      text-align: center;
    }

    .hero-content h1 {
      font-size: 2.8rem;
    }

    .section {
      padding: 5rem 0;
    }

    .card-box {
      background: var(--card);
      padding: 2rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      text-align: center;
      transition: 0.3s;
    }

    .card-box:hover {
      transform: translateY(-5px);
    }

    .card-box i {
      font-size: 2rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .contact-form {
      background: white;
      padding: 2.5rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .form-control {
      border-radius: 10px;
      padding: 0.8rem;
    }

    .btn-send {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      transition: 0.3s;
    }

    .btn-send:hover {
      opacity: 0.9;
    }

    iframe {
      transition: 0.3s;
    }

    iframe:hover {
      transform: scale(1.01);
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<header class="header">
  <nav class="nav-bar">
    <div class="logo">
      <a href="/">Library</a>
    </div>

    <ul class="nav-list">
      <li><a href="/">Home</a></li>
      <li><a href="/library">Library</a></li>
      <li><a href="/about">About Us</a></li>
      <li><a href="/contact" class="active">Contact</a></li>
      <li><a class="btn-admine" href="/admin/login">Admin</a></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <img src="{{ asset('assets/images/contact-hero.png') }}" alt="">
  <div class="hero-content">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you</p>
  </div>
</section>

<!-- CONTACT INFO -->
<section class="section">
  <div class="container">
    <div class="row g-4 text-center">

      <div class="col-md-4">
        <div class="card-box">
          <i class="fas fa-envelope"></i>
          <h5>Email</h5>
          <p>readingfreely@gmail.com</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <i class="fas fa-phone"></i>
          <h5>Phone</h5>
          <p>+855 123 456 789</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <i class="fas fa-map-marker-alt"></i>
          <h5>Location</h5>
          <p>Phnom Penh, Cambodia</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FORM -->
<section class="section pt-0">
  <div class="container">
    <div class="contact-form">

      <h3 class="mb-4 text-center">Send us a message</h3>

      <form method="POST" action="#">
        @csrf

        <div class="row g-3">

          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>

          <div class="col-12">
            <input type="text" class="form-control" placeholder="Subject">
          </div>

          <div class="col-12">
            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
          </div>

          <div class="col-12 text-center mt-3">
            <button type="submit" class="btn-send">
              Send Message <i class="fas fa-paper-plane ms-2"></i>
            </button>
          </div>

        </div>
      </form>

    </div>
  </div>
</section>

<!-- MAP -->
<section class="section pt-0">
  <div class="container">
    <h3 class="text-center mb-4">Find Us Here</h3>

    <div style="border-radius:15px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
      <iframe 
        src="https://www.google.com/maps?q=Phnom+Penh+Cambodia&output=embed"
        width="100%" 
        height="350" 
        style="border:0;" 
        loading="lazy">
      </iframe>
    </div>

  </div>
</section>

<!-- FOOTER -->
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

</body>
</html>