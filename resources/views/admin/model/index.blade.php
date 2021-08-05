@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Model') }}</div>

                    <div class="card-body">
                        <div class="card mb-5">
                            <form action="{{ route('admin.model.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nama Model</label>
                                                <input type="text" name="name" id="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="img">Gambar</label>
                                                <input type="file" name="img" id="img" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="product_id">Jenis Produk</label>
                                                <select name="product_id" id="product_id" class="form-control custom-control">
                                                    <option disabled selected>-- Pilih --</option>
                                                    @foreach ($products as $id => $key)
                                                        <option value="{{ $key }}">{{ $id }}</option>
                                                    @endforeach
                                                </select>
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
                        <h3 class="text-secondary mb-3"><u>Tabel Model</u></h3>
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis Produk</th>
                                        <th>Nama Model</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($models as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $models->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->product->name }}</td>
                                            <td>{{ $key->name }}</td>
                                            <td>
                                                <img src="{{ asset('model_images/' . $key->img) }}"
                                                    style="width: 100px; height: 100px; object-fit: cover;"
                                                    alt="modelImg">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.model.edit', $key->id) }}"
                                                    class="btn btn-warning mb-1 mr-1">Edit</a>
                                                <form action="{{ route('admin.model.destroy', $key->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Yakin?')"
                                                        class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="5" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $models->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
