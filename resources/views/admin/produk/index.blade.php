@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Produk') }}</div>

                    <div class="card-body">
                        <div class="card mb-5">
                            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama Produk</label>
                                                <input type="text" name="name" id="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="img">Gambar</label>
                                                <input type="file" name="img" id="img" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                        <h3 class="text-secondary mb-3"><u>Tabel Produk</u></h3>
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $products->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->name }}</td>
                                            <td>
                                                <img src="{{ asset('product_images/' . $key->img) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="productImg">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.edit', $key->id) }}" class="btn btn-warning mb-1 mr-1">Edit</a>
                                                <form action="{{ route('admin.product.destroy', $key->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Yakin?')"
                                                        class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="4" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
