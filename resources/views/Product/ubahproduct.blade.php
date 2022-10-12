@extends('template.index')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="my-5 text-center">Ubah Produk</h1>
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" value="{{ old('nama_produk', $product->nama_produk) }}" class="form-control" id="nama_produk" name="nama_produk">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" value="{{ old('keterangan', $product->keterangan) }}" class="form-control" id="keterangan" name="keterangan">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" value="{{ $product->harga }}" class="form-control" id="harga" name="harga">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" value="{{ old('jumlah', $product->jumlah) }}" class="form-control" id="jumlah" name="jumlah">
                </div>
                <button class="btn btn-primary my-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
