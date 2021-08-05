@extends('_landing.app')

@section('content')
    <header class="masthead">
        <div class="container">
            <h3 class="masthead-heading text-uppercase">BENGKEL LAS ANEKA KARYA</h3>
            <h5 class="masthead-subheading">Menyediakan jasa dan layanan berbagai macam produk dari bahan besi dan baja
            </h5>
            <div class="row text-center">
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/pemesanan.png') }}" alt="..." />
                    <p class="my-3">PEMESANAN</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/perbaikan.png') }}" alt="..." />
                    <p class="my-3">PERBAIKAN</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/katalog.png') }}" alt="..." />
                    <p class="my-3">KATALOG</p>
                </div>
                <div class="col-md-3">
                    <img width="100" height="100" src="{{ asset('landing/assets/img/berita-pesanan.png') }}" alt="..." />
                    <p class="my-3">BERITA PESANAN</p>
                </div>
            </div>
        </div>
    </header>
    <section class="page-section bg-light" id="katalog">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Katalog</h2>
            </div>
            <div class="row">
                @auth

                @else
                    @forelse ($products as $key)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <div class="card">
                                    <div class="card-body">
                                        <a class="portfolio-link" href="{{ route('login') }}">
                                            <img style="width: 100%; height: 300px; object-fit: cover;"
                                                src="{{ asset('product_images/' . $key->img) }}" alt="productImg" />
                                        </a>
                                        <div class="portfolio-caption">
                                            <div class="portfolio-caption-heading"><b>{{ $key->name }}</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 class="text-danger text-center">Katalog Kosong!</h3>
                    @endforelse
                @endauth
            </div>
        </div>
    </section>
    <section class="page-section bg-light" id="datapesanan">
        <div class="container">
            <div class="text-center mb-2">
                <h2 class="section-heading text-uppercase">Berita Pesanan</h2>
            </div>
            <div class="row">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><span class="text-muted">Irsad Hidayattullah</span></h2>
                    <p class="lead">Jl. Merdeka no. 28 01/08 Kel. Cikundul, Kec. Lembursitu, Sukabumi</p>
                    <p class="lead">Sukabumi</p>
                    <p class="lead">-</p>
                    <p class="lead">Jawa Barat</p>
                    <p class="lead">43168</p>
                    <p class="lead">081212*****</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('landing/assets/img/pintu/model1.png') }}" width="345" height="345"
                        class="rounded-start" alt="...">
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-light" id="datacontact">
        <div class="container">
            <div class="text-center mb-2">
                <h2 class="section-heading text-uppercase">Data Kontak</h2>
            </div>
            <div class="row">
                <div class="col-md-5 order-md-1">
                    <u>Untuk lebih jelas mengenai pemesanan atau berkonsultasi mengenai kebutuhan anda silahkan hubungi
                        :</u>
                    <h2 class="featurette-heading"><span class="text-muted">0812-9776-130</span></h2>
                </div>
                <div class="col-md-7 order-md-2">
                    <div class="mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6431688334474!2d106.74134041476891!3d-6.178496495526936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTAnNDIuNiJTIDEwNsKwNDQnMzYuNyJF!5e0!3m2!1sid!2sid!4v1628179877659!5m2!1sid!2sid"
                            width="500" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div>
                        <small>
                            Alamat Bengkel Las : Jl. Joglo Raya No.21 E, RT.8/RW.3, Joglo, Kec. Kembangan, Kota Jakarta
                            Barat, Daerah Khusus Ibukota Jakarta 11640
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-dark" id="about">
        <div class="">
            <header class="masthead">
                <div class="container mb-2">
                    <img width="500" height="400" style="object-fit: cover;"
                        src="{{ asset('landing/assets/img/footer/img1.png') }}" alt="..." />
                    <img width="500" height="400" style="object-fit: cover;"
                        src="{{ asset('landing/assets/img/footer/img2.png') }}" alt="..." />
                </div>
                <div class="container">
                    <p class="justify"> Bengkel Las Aneka Karya merupakan bengkel las Professional yang sudah hadir
                        sejak tahun 1998 berlokasi di Joglo Raya no,21, Kembangan, Jakarta Barat. Tentunya lokasi bukan
                        menjadi penghalang, kita menerima pesanan untuk luar wilayah Jakarta Barat seperti DKI Jakarta,
                        Tangerang, Bogor, Depok, dan wilayah Jabodetabek lainnya. Didukung dengan teknisi terbaik dan
                        berpengalaman kita membuat kontruksi besi dan baja seperti Teralis Jendela, Kanopi Rumah,
                        Railing Tangga, Railing Balkon, Pintu Henderson, Pintu Pagar, Pagar Besi, Pintu Garasi, Tangga
                        Lurus, Tangga Putar dan juga lainnya.</p>
                    <br>
                    <p class="justify">Kami selalu menjaga kepercayaan pelanggan dengan memberikan service terbaik mulai
                        dari bahan baku yang terbaik dan juga pengerjaan yang tepat waktu dan kami pun siap datang ke
                        lokasi anda untuk survey ataupun konsultasi mengenai pembuatan pesanan.</p>
                </div>
            </header>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Bengkel Las 2021</div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="modalpesan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('landing/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <h2 class="featurette-heading"><span class="text-muted">Form Order</span></h2>
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <!-- <- -->
                                <form>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">PESAN SEKARANG</button>
                                </form>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img src="{{ asset('landing/assets/img/pintu/model1.png') }}" width="345" height="345"
                                    class="rounded-start" alt="...">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
