@extends('_landing.app')

@section('content')
    <section class="page-section bg-light mt-5" id="katalog">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Order Model : {{ $modeling->name }}</h4>
                {{-- alert success --}}
                @if (session()->has('success'))
                    <div class="my-2">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <ul>
                                <b>{{ session()->get('success') }}</b>
                            </ul>
                        </div>
                    </div>
                @endif
                {{-- alert error --}}
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err . '!' }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <img style="width: 250px; height: 150px; object-fit: cover;"
                                            src="{{ asset('product_images/' . $modeling->product->img) }}"
                                            alt="productImg" />
                                        <b>Katalog : {{ $modeling->product->name . ' - ' . $modeling->name }}</b>
                                    </div>
                                </div>
                                <form action="{{ route('pembeli.buy') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="modeling_id" value="{{ $modeling->id }}">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="full_name" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                            <input type="text" class="form-control" name="address" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Kota</label>
                                            <input type="text" class="form-control" name="city" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Kabupaten</label>
                                            <input type="text" class="form-control" name="district" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                                            <input type="text" class="form-control" name="province" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" name="postal_code"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2"
                                        onclick="return confirm('Anda Yakin untuk Memesan?')">PESAN SEKARANG</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
