@extends('template.index')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <a href="{{ route('product.create') }}" class="btn btn-primary mt-5">Tambah Produk</a>
           <div class="my-4">
            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session('update'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session('delete'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
           </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach ($product as $p)
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>{{ $p->nama_produk }}</td>
                      <td>{{ $p->keterangan }}</td>
                      <td>{{ $p->harga }}</td>
                      <td>{{ $p->jumlah }}</td>
                      <td>
                        <form action="{{ route('product.destroy', $p->id) }}" method="POST">
                            <a href="{{ route('product.edit', $p->id) }}" class="btn btn-sm btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                @endforeach
              </table>
        </div>
    </div>
@endsection
