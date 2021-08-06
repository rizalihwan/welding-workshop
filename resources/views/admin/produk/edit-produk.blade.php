@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Produk</div>

                <div class="card-body">
                    <div class="card mb-5">
                        <form action="{{ route('admin.product-update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Produk</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{($produk->name)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="img">Gambar</label>
                                            <input type="file" name="img" id="img" value="{{($produk->img)}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('product_images/'.$produk->img) }}" alt="" width="200px" srcset="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="#" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
