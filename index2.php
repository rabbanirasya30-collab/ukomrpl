<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Landing Page Sederhana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MyBrand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container vh-100">
      <h1 class="display-4">Landing Page Sederhana</h1>
      <p class="lead">Dibuat dengan Bootstrap 5, cepat dan responsif</p>
      <a href="#contact" class="btn btn-light btn-lg mt-3">Mulai Sekarang</a>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <h4>Mudah</h4>
          <p>Struktur simpel dan mudah dipahami.</p>
        </div>
        <div class="col-md-4">
          <h4>Responsif</h4>
          <p>Tampilan rapi di semua ukuran layar.</p>
        </div>
        <div class="col-md-4">
          <h4>Gratis</h4>
          <p>Menggunakan Bootstrap via CDN.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="bg-light py-5">
    <div class="container text-center">
      <h2>Hubungi Kami</h2>
      <p>Email: info@mybrand.com</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2026 MyBrand. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
