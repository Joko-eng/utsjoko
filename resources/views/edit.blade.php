<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Edit Bunga</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bunga.update', $bungas->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_bunga">Nama Bunga</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $bungas->nama }}" required>
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok" value="{{ $bungas->stok }}" required>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="{{ $bungas->harga }}" required>
                            </div>

                            <div class="form-group">
                                <label for="gambar"> Gambar</label>
                                <div>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                                
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
