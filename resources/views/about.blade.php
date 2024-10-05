@extends('layouts.main-user')

@section('content')
    <x-navbar />
    <x-header :title="$title" />

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-4 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveRight">
                        <img src="{{ asset('assets/user/img/sources/struktur_organisasi.jpeg') }}" class="img-fluid w-70"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">Tentang kami</h4>
                    <h1 class="display-5 mb-4">Deskripsi tentang kami</h1>
                    <p class="mb-2" style="text-align: justify">Kelurahan Topo merupakan salah satu Kelurahan yang
                        terletak
                        di badan gunung
                        (dataran
                        tinggi) Kie Matubu Kecamatan Tidore Kota Tidore Kepulauan Provinsi Maluku Utara. Karena secara
                        geografis, kelurahan Topo berada pada ketinggian 500 MDPL dari permukaan laut dan memiliki luas
                        wilayah 332,2 Ha/m2. Kelurahan Topo juga memiliki jumlah penduduk yang lumayan banyak, dengan jumlah
                        penduduk keseluruhan adalah 1.472 jiwa, yang terbagi menjadi 3 (tiga) RW dan 6 (enam) RT dengan
                        banyak Kepala Keluaraga (KK) setiap RT adalah 41 Kepala Keluarga (KK).
                    </p>
                    <p class="mb-4" style="text-align: justify"> Sebagian besar penduduk Kelurahan Topo perprofesi sebagai
                        petani, karena memiliki
                        luas lahan produktif yang cukup, serta memiliki tanah yang subur untuk tanaman holtikultura, maka
                        mayoritas penduduk setempat lebih memilih memanfaatkan lahan tersebut untuk aktifitas pertanian.
                        Karena itu tidak mengherankan lagi jika dari Topo lahirlah komoditas-komoditas unggulan dalam sektor
                        pertanian yang mencuat hingga ke tingkat nasional dimana konsistensi fraternal dijunjung tinggi dan
                        memiliki afinitas tersendiri yakni ”jeruk topo /joji sabalaka” (jeruk) dan “bawang topo” (bawang
                        merah). Dimana jeruk Topo/Joji Sabalaka adalah salah satu buah primadona kebanggaan masyarakat Topo
                        yang memiliki segi-segi pembeda dengan jeruk-jeruk pada umumnya, begitu pula dengan bawang merah
                        dari Topo atau dikenal masyarakat dengan "Bawang Topo" merupakan salah satu komoditas unggulan yang
                        tumbuh dan berkembang disana yang sudah menjadi identitas di Kelurahan Topo.
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="fas fa-newspaper fa-4x text-primary"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h2 class="mb-0 fw-bold">{{ $jml_article }}</h2>
                                    <small class="text-dark">Article</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-4x text-primary"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h2 class="mb-0 fw-bold">{{ $jml_penduduk }}</h2>
                                    <small class="text-dark">Jumlah penduduk</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid feature overflow-hidden py-3">
        <div class="container py-5">
            <div class="row g-5 pt-5" style="margin-top: 6rem;">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
                        <img src="{{ asset('assets/user/img/sources/visi_misi_kelurahan.jpeg') }}"
                            class="img-fluid w-80 h-80" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <h4 class="text-primary">Visi misi</h4>
                    <h1 class="display-6 mb-4">Menuju Topo berperadaban</h1>
                    <ul>
                        <li class="mb-3">MENINGKATKAN IMAN DAN TAQWA</li>
                        <li class="mb-3">MEMBENTUK KARAKTER MENUJU MASYARAKAT BERBUDAYA, MANDIRI DAN KREATIF</li>
                        <li class="mb-3">PENATAAN LINGKUNGAN YANG BERSIH, INDAH DAN NYAMAN</li>
                        <li class="mb-3">MENINGKATKAN KAPASITAS APARATUR GUNA MEWUJUDKAN PELAYANAN YANG BAIK BERKUALITAS
                            TRANSPARAN DAN
                            AKUNTABEL</li>
                        <li class="mb-3">MEWUJUDKAN PEMBANGUNAN BERBASIS PARTISIPASI MASYARAKAT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
@endsection
