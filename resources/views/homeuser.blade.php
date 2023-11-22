
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bunga</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Your additional styles go here */
    </style>
</head>
<body>

<!-- Your content goes here -->
<div class="container mt-5">
    <div class="row justify-content-center">

        @forelse ($bungas as $bunga)
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    @if($bunga->image)
                        <img src="{{ asset('storage/images/' . $bunga->image) }}" class="card-img-left" alt="Gambar" style="max-height: 200px;">
                    @else
                        <div class="card-img-top text-center p-5">
                            <p class="m-0">Tidak ada gambar yang tersedia</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $bunga->nama }}</h5>
                        <p class="card-text">Jumlah: {{ $bunga->stok }}</p>
                        <p class="card-text">Harga: {{ $bunga->harga }}</p>
                        <a href="https://wa.me/087863098305?text=Saya%20ingin%20membeli%20{{ $bunga->nama }}" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center my-4">Data Bunga</h3>
                        <hr>
                        <div class="alert alert-danger">
                            Data produk belum tersedia.
                        </div>
                    </div>
                </div>
            </div>
        @endforelse

    </div>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
