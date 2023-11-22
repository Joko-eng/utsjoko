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
        <div class="image-with-text">
            <p>Temukan <br> Produk Khas <br>Kami Disini !</p>
            <a href="#" class="get-started-button">Selengkapnya</a>
            <img src="assets/img/flower.jpg" alt="Deskripsi Gambar Anda">
        </div>
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

</body>
</html>
