<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link hrex  xx  f="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Quicksand:wght@600&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>Web Dasar</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="active">
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="{{route ('bungas.homeuser')}}">Daftar Produk</a>
                </li>
                <li>
                    <a href="#">Kategori Produk</a>
                </li>
                <li>
                    <a href="#">Tentang Kami</a>
                </li>
                <li><a href="{{url ('/home')}}" id="user"><i data-feather="user"></i></a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/flower.jpg" class="d-block w-100" alt="gambar">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Brighten Your Day with Blooms</h5>
                  <p>Our exquisite collection of flowers will mesmerize you with their vibrant colors and enchanting fragrances.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/flow.jpg" class="d-block w-100" alt="gambar">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Express Emotions with Flowers</h5>
                    <p>Let our thoughtfully crafted bouquets convey your feelings, whether it's love, gratitude, or sympathy.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/flow1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Explore the Beauty of Nature</h5>
                    <p>Our exquisite collection of flowers will mesmerize you with their vibrant colors and enchanting fragrances.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        {{-- <div class="image-with-text">
            <p>Temukan <br> Produk Khas <br>Kami Disini !</p>
            <a href="#" class="get-started-button">Selengkapnya</a>
            <img src="assets/img/flower.jpg" alt="Deskripsi Gambar Anda">
        </div> --}}
        <section class="deskripsi-container">
            <div>
                <div>
                    <h2>The Flower Studio</h2>
                    <p>The Flower Studio adalah salah satu toko bunga yang ada di jogjakarta dan sudah berdiri sejak 
                        tahun 90an dan sudah banyak melayani pesanan bunga untuk berbagai keperluan dan acara seperti : 
                        Pernikahan, Duka Cita, Wisuda, Peresmian, dan berbegai acara lainnya dan melayani untuk wilayah 
                        Jogjakarta dan sekitarnya 
                    </p>
                </div>
                <div class="deskripsi-footer">
                    <p>November 2023</p>
                    <p class="font-weight-read">Read More</p>
                </div>
            </div>
            <img src="assets/img/bunga.jpg" alt="bunga">

    <script>
        feather.replace()
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
