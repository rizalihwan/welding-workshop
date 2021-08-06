@extends('_landing.app')

@section('content')
    <section class="page-section bg-light mt-5" id="katalog">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">List Model pada Katalog {{ $product->name }}</h2>
            </div>
            <div class="row">
                @forelse ($product->modelings as $key)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-body">
                                    <a class="portfolio-link" href="{{ route('pembeli.order', $key->id) }}">
                                        <img style="width: 100%; height: 300px; object-fit: cover;"
                                            src="{{ asset('model_images/' . $key->img) }}" alt="productImg" />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><b>{{ $key->name }}</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-danger text-center">Model pada Katalog {{ $product->name }} Kosong!</h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection
