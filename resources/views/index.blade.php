@extends('layouts.main-user')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid header position-relative overflow-hidden p-0">

        <x-navbar />

        <x-hero />
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="{{ asset('assets/user') }}/img/sources/kel_topo.jpeg" class="img-fluid w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">Tentang kami</h4>
                    <h1 class="display-5 mb-2">Sedikit deskripsi tentang kami</h1>
                    <p class="mb-4">Kelurahan Topo merupakan salah satu Kelurahan yang terletak
                        di badan gunung
                        (dataran
                        tinggi) Kie Matubu Kecamatan Tidore
                    </p>
                    <div class="d-flex mb-4">
                        <i class="fas fa-users fa-4x text-primary"></i>
                        <div class="d-flex flex-column ms-3">
                            <h2 class="mb-0 fw-bold">{{ $jml_penduduk }}</h2>
                            <small class="text-dark">jumlah penduduk</small>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Gallery Start -->
    <div class="container-fluid blog py-5 gallery">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Galeri kami</h4>
                <h1 class="display-5 mb-4">Silahkan lihat gallery kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($galleries as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img rounded">
                                <a href="{{ asset('storage/galleries') }}/{{ $item->gallery }}" data-toggle="lightbox">
                                    <img src="{{ asset('storage/galleries') }}/{{ $item->gallery }}" class="img-fluid w-100"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12 text-center py-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('galleries') }}" class="btn btn-primary rounded-pill py-3 px-5">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Artikel kami</h4>
                <h1 class="display-5 mb-4">Daftar beberapa artikel</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($articles as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/articles') }}/{{ $item->gambar }}" class="img-fluid w-100"
                                    alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i>
                                        {{ date('d, F Y', strtotime($item->updated_at)) }}</span>

                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4">
                                <h5 class="mb-4">{{ $item->title }}</h5>
                                <p class="mb-2 text-gray"><i class="fa fa-user text-primary"></i>
                                    {{ $item->penulis }} | <i class="fas fa-folder-open text-primary"></i>
                                    {{ $item->category->category }}</p>
                                <p class="mb-4">{!! Str::limit(strip_tags($item->body), 80, '...') !!}
                                </p>
                                <a class="btn btn-light rounded-pill py-2 px-4"
                                    href="{{ route('article.single', ['slug' => $item->slug]) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12 text-center py-3 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ route('article') }}" class="btn btn-primary rounded-pill py-3 px-5">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary mb-4">Kontak</h4>
                <h1 class="display-5 mb-4">Silahkan kontak kami</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama anda</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email anda</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                    <label for="phone">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Addresses</h4>
                            <p class="mb-0">
                                jln Rorano No.01 RT 003 RW 002, Kec.
                                Tidore Kota Tidore Kepulauan</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-phone-alt fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0">-</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fa fa-envelope-open fa-2x text-primary"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0">kelurahantopo50@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <div class="bg-light d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 50px;"><i
                                    class="fas fa-share fa-2x text-primary"></i></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.225830460859!2d127.40979130841431!3d0.656447939394295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x329cced38788e96b%3A0xab676ba72617548f!2sTopo%2C%20Tidore%2C%20Kota%20Tidore%20Kepulauan%2C%20Maluku%20Utara!5e0!3m2!1sid!2sid!4v1727705075996!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
