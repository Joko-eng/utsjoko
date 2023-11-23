@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2">
            <!-- Your sidebar content goes here -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sidebar</h6>
                    <!-- Add your sidebar content here -->
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="text-center my-4">Data produk</h3>
                    <hr>
                    <table class="table table-bordered">
                        <a href="{{ route('bunga.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bungas as $bunga)
                            <tr>
                                <td>{{ $bunga->nama }}</td>
                                <td>{{ $bunga->stok }}</td>
                                <td>{{ $bunga->harga }}</td>
                                <td>
                                    @if($bunga->image)
                                    <img src="{{ asset('storage/images/' . $bunga->image) }}" alt="Gambar" style="max-width: 200px; max-height: 200px;">
                                    @else
                                    <p>Tidak ada gambar yang tersedia</p>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                        action="{{ route('bunga.destroy', $bunga->id) }}" method="POST">  
                                            <a href="{{ route('bunga.edit', $bunga->id) }}" {{ $bunga->id }} class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">
                                    <div class="alert alert-danger">
                                        Data produk belum tersedia.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
