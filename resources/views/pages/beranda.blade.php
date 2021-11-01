<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edubridge | Beranda</title>

    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-index.css')}}">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="owl/owl.theme.default.css">

  </head>
  <body>
    @include('shared/header')
    @include('shared/navbar')
    <!-- Start Banner Information -->
    <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php
        $length = count($dataBanners);
        for ($i = 0; $i < $length; $i++) { ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i;}}" class="{{ $i == 0 ? "active" : " " }}" aria-current="true" aria-label="Slide 1"></button>
        <?php }
        ?> 
         
        {{-- @foreach ($dataBanners as $banners)
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $banners["id"]-1;}}" class="{{ $banners["id"]-1 == 0 ? "active" : " " }}" aria-current="true" aria-label="Slide 1"></button>
        @endforeach --}}
        {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button> --}}
      </div>
      <div class="carousel-inner">
        {{-- @foreach ($dataBanners as $banners)
          <div class="carousel-item {{ $banners["id"] == 1 ? "active" : " " }}">
            <img src="{{$banners["image_url"]}}" class="d-block w-100 img-fluid">
          </div>
        @endforeach --}}
        <?php
        $length = count($dataBanners);
        $temp = 1 ;
        for ($i = 0; $i < $length; $i++) { ?>
          <div class="carousel-item {{ $temp == 1 ? "active" : " "}}">
            <a href="{{$dataBanners[$i]["url_to"]}}" target="_blank"><img src="{{$dataBanners[$i]["image_url"]}}" class="d-block w-100 img-fluid"></a>
          </div>
        <?php $temp++; }
        ?> 
        {{-- <div class="carousel-item active">
          <img src="images/banner-information.jpg" class="d-block w-100 img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/banner-information.jpg" class="d-block w-100 img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/banner-information.jpg" class="d-block w-100 img-fluid">
        </div> --}}
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Banner Information -->


    <!-- Start Button Find Study -->
    <section class="find-study container">
      <div class="row">
        <div class="col-6">
          <a href="/studi-luar"><button class="btn">TEMUKAN JURUSAN STUDI</button></a>
        </div>
        <div class="col-6">
          <a href="/studi-luar"><button class="btn">TEMUKAN NEGARA STUDI</button></a>
        </div>
      </div>
    </section>
    <!-- End Button Find Study -->


    <!-- Start Pipe Psikotes -->
    <section class="pipe-psikotes">
      <div class="container text-center">

        <div class="sec-title">
          <h5 class="mb-4 pb-2 mb-md-0 pb-md-2">MASIH BELUM YAKIN DENGAN JURUSAN STUDI DAN PROSPEK KARIR?</h5>
          <h1>PIPE PSIKOTES</h1>
        </div>

        <div class="row pt-4 mb-1">
          <div class="col-12 col-md-4 mb-4">
            <img src="images/potential.png">
            <h4 class="pt-4 mb-0">POTENTIAL</h4>
            <h6 class="pt-2">Ketahui tingkat kecerdasan (IQ)</h6>
          </div>

          <div class="col-12 col-md-4 mb-4">
            <img src="images/interest.png">
            <h4 class="pt-4 mb-0">INTEREST</h4>
            <h6 class="pt-2">Ketahui jurusan dan karir yang tepat</h6>
          </div>

          <div class="col-12 col-md-4">
            <img src="images/personality.png">
            <h4 class="pt-4 mb-0">PERSONALITY</h4>
            <h6 class="pt-2">Ketahui kepribadian kamu</h6>
          </div>
        </div>

        <a href="https://pipe-psikotes.co.id/" target="_blank"><button class="mt-4 ps-4 pe-4">PESAN SEKARANG</button></a>
      </div>
    </section>
    <!-- End Pipe Psikotes -->


    <!-- Start Tujuan Studi-->
    <section class="tujuan-studi">
      <div class="container text-center">

       <div class="sec-title">
         <h2>PILIHAN TUJUAN STUDI</h2>
       </div>

       <div class="row mt-lg-5 mt-4 pt-2">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" style="cursor: pointer;" onclick="location.href='/studi-luar';">
          <div class="card card-continent">
            <div class="card-body">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="165.000000pt" height="80.000000pt" viewBox="0 0 199.000000 128.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)" fill="#0a223d" stroke="none">
                <path d="M1878 1269 c-10 -6 -18 -22 -18 -37 0 -62 -18 -96 -60 -115 -22 -9
                -44 -17 -49 -17 -19 0 -45 -43 -44 -75 1 -34 -3 -37 -69 -59 -10 -3 -15 -11
                -12 -19 6 -17 -89 -107 -114 -107 -28 0 -32 8 -20 42 14 39 -5 87 -26 69 -12
                -10 -14 -6 -13 21 2 26 -3 34 -25 42 -23 8 -30 6 -48 -15 -18 -21 -19 -33 -14
                -96 5 -62 4 -74 -10 -79 -26 -10 -30 1 -30 75 -1 39 -5 67 -10 63 -5 -3 -6 2
                -3 12 4 10 7 22 7 27 0 5 6 9 14 9 7 0 19 7 26 15 7 8 18 15 24 14 24 -3 37 2
                31 11 -4 6 -10 8 -15 5 -5 -3 -12 -1 -15 5 -5 8 -15 6 -32 -5 -21 -14 -29 -15
                -49 -4 -13 7 -24 17 -24 22 0 6 -10 1 -22 -10 -30 -27 -68 -46 -68 -34 0 5 -8
                11 -17 13 -13 2 -10 9 16 36 l33 33 -33 -2 c-19 -1 -52 3 -75 9 -22 7 -137 14
                -255 16 -118 3 -243 10 -279 15 -165 27 -236 42 -339 72 -35 11 -64 19 -66 19
                -1 0 0 -11 2 -24 3 -13 0 -32 -6 -43 -10 -17 -10 -16 -11 4 0 20 -25 43 -48
                43 -5 0 -8 -21 -8 -47 0 -45 -14 -87 -52 -158 -9 -16 -19 -54 -23 -84 -4 -30
                -12 -57 -18 -60 -11 -7 5 -138 19 -156 4 -5 13 -36 20 -67 6 -32 16 -60 21
                -63 5 -4 9 -17 9 -31 0 -13 4 -24 9 -24 20 0 96 -74 103 -100 7 -22 15 -29 47
                -34 21 -3 77 -28 122 -55 65 -37 97 -50 141 -54 33 -3 58 -2 58 4 0 5 15 9 33
                9 36 0 83 -42 105 -93 17 -39 56 -55 80 -34 10 10 26 17 35 17 17 0 81 -79
                111 -137 9 -18 22 -33 29 -33 6 0 21 -3 33 -6 19 -5 21 -2 20 39 -1 35 5 51
                23 71 14 14 29 26 35 26 5 0 20 10 32 21 17 16 40 23 92 27 44 3 72 1 76 -6 4
                -8 15 -8 31 -2 14 5 33 7 42 3 14 -5 15 -3 6 7 -6 7 -9 19 -6 26 3 8 -1 14 -8
                14 -26 1 14 17 73 30 46 10 63 10 87 0 24 -10 34 -10 46 0 20 17 85 -33 85
                -66 0 -13 12 -37 28 -53 15 -16 38 -41 51 -56 23 -25 26 -26 38 -9 7 10 13 26
                13 36 0 17 -32 89 -77 172 -22 40 -19 104 6 135 12 14 30 43 41 64 11 20 27
                37 35 37 8 0 15 6 15 14 0 8 9 21 20 29 12 8 18 21 15 29 -4 9 1 18 9 21 24 9
                19 27 -6 28 -13 0 -17 3 -10 6 16 6 15 30 -2 40 -7 4 -16 20 -20 36 -18 79
                -18 82 6 38 l23 -44 3 32 c2 18 -2 39 -9 48 -11 12 -10 14 7 11 17 -3 19 3 19
                46 1 39 5 52 25 68 71 55 84 68 72 68 -7 0 -17 12 -22 26 -8 21 -6 34 12 67
                13 23 33 50 46 60 27 23 28 42 2 60 -10 7 -24 25 -29 40 -11 29 -25 33 -53 16z"/>
                </g>
              </svg>
              <h6 class="pt-4 mt-2 mb-0">AMERIKA UTARA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" style="cursor: pointer;" onclick="location.href='/studi-luar';">
          <div class="card card-continent">
            <div class="card-body">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="80.000000pt" viewBox="0 0 159.000000 129.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,129.000000) scale(0.100000,-0.100000)" fill="#0a223d" stroke="none">
                <path d="M1195 1277 c-13 -10 -15 -16 -6 -21 6 -4 9 -12 5 -17 -3 -5 -10 -7
                -15 -4 -5 4 -9 -1 -9 -9 0 -9 -4 -16 -10 -16 -5 0 -10 -7 -10 -16 0 -13 -3
                -14 -13 -5 -11 8 -16 5 -25 -15 -7 -14 -12 -34 -12 -44 0 -15 -7 -20 -25 -20
                -19 0 -25 5 -23 16 2 10 -3 19 -11 22 -10 3 -11 -2 -6 -19 4 -13 12 -25 16
                -27 15 -6 10 -32 -6 -32 -25 0 -36 -33 -17 -54 16 -18 16 -19 -15 -13 -37 7
                -41 1 -15 -20 15 -13 14 -14 -13 -8 -30 7 -45 20 -45 43 0 6 -6 12 -14 12 -8
                0 -18 5 -22 11 -5 8 6 9 35 4 46 -8 71 5 71 36 0 20 -38 34 -122 44 -32 4 -48
                11 -48 21 0 28 -67 17 -107 -18 -19 -18 -40 -32 -45 -30 -5 1 -6 -3 -2 -9 4
                -7 0 -17 -9 -24 -9 -6 -28 -36 -43 -65 -27 -53 -60 -88 -117 -123 -26 -16 -29
                -23 -24 -52 4 -21 1 -36 -6 -39 -8 -3 -8 -5 1 -5 7 -1 10 -6 7 -11 -7 -11 11
                -40 24 -40 4 0 21 13 38 30 l30 29 12 -69 c13 -73 27 -94 43 -66 5 9 16 16 23
                16 9 0 15 10 15 23 0 12 9 40 21 61 19 35 19 39 4 56 -21 23 -16 59 12 87 12
                11 26 36 31 55 6 23 15 34 30 36 29 4 28 -16 -2 -61 -19 -28 -24 -44 -19 -72
                3 -20 11 -35 19 -35 8 0 14 -4 14 -9 0 -6 19 -1 43 9 24 11 53 17 65 13 21 -5
                21 -6 5 -19 -10 -7 -27 -14 -39 -14 -11 0 -29 -6 -40 -14 -15 -12 -17 -17 -6
                -27 13 -14 17 -49 4 -49 -4 0 -13 5 -20 12 -17 17 -26 3 -27 -41 -1 -45 -26
                -75 -54 -66 -11 3 -33 -1 -48 -9 -21 -10 -40 -12 -72 -6 -52 9 -66 26 -46 57
                16 23 7 37 -18 27 -11 -4 -15 -19 -14 -52 2 -33 -2 -46 -11 -44 -23 4 -80 -26
                -87 -47 -4 -14 -15 -21 -30 -21 -13 0 -28 -6 -32 -12 -19 -30 -41 -40 -62 -28
                -17 9 -21 8 -21 -5 0 -13 -7 -15 -35 -9 -36 6 -51 -11 -20 -22 8 -4 22 -21 31
                -40 13 -27 14 -39 4 -69 -7 -20 -18 -39 -24 -41 -7 -3 -43 6 -80 20 -80 29
                -100 26 -103 -16 -1 -17 -11 -44 -21 -62 -10 -17 -18 -47 -17 -66 0 -28 4 -35
                25 -40 15 -4 26 -14 28 -27 3 -23 -2 -22 108 -8 40 5 75 30 68 49 -6 16 30 48
                69 61 21 7 33 18 37 35 7 28 42 39 65 20 12 -10 22 -8 47 7 41 23 64 19 72
                -13 4 -13 25 -38 49 -55 94 -68 99 -72 94 -96 -5 -27 -1 -29 20 -8 12 12 12
                19 3 30 -10 12 -9 16 3 21 9 3 21 3 27 -1 5 -3 10 -1 10 5 0 6 -12 15 -27 21
                -15 6 -30 13 -33 17 -3 4 -14 12 -24 18 -11 6 -24 19 -30 30 -6 10 -17 23 -23
                27 -18 11 -16 57 2 57 8 0 15 -5 15 -11 0 -6 6 -9 12 -7 7 3 17 -5 23 -16 6
                -11 34 -34 62 -51 43 -25 53 -35 53 -57 0 -16 4 -28 8 -28 5 0 15 -11 22 -25
                10 -18 22 -25 44 -26 l31 -1 -28 -7 -28 -6 21 -22 c24 -26 45 -30 36 -8 -3 8
                1 21 9 29 12 11 12 16 1 25 -7 6 -16 8 -19 4 -4 -3 -7 1 -7 10 0 8 -3 22 -6
                30 -4 11 1 13 23 10 21 -3 24 -2 14 6 -12 8 -10 11 12 16 15 4 34 4 43 1 9 -3
                26 2 39 12 22 18 22 19 4 30 -20 13 -26 47 -10 56 5 4 12 25 16 47 8 46 42 89
                55 69 6 -9 19 -7 54 9 26 11 53 27 62 36 18 17 34 20 34 5 0 -5 -6 -10 -12
                -10 -10 0 -10 -2 -1 -8 8 -5 9 -13 3 -22 -14 -22 -12 -30 8 -30 9 0 30 -7 46
                -15 15 -8 34 -15 42 -15 7 0 19 -9 27 -20 8 -11 21 -18 29 -15 8 3 24 -3 37
                -14 36 -32 80 -37 97 -12 18 25 34 27 34 5 0 -8 5 -12 10 -9 17 10 12 75 -5
                75 -8 0 -15 5 -15 10 0 6 -7 10 -15 10 -21 0 -85 67 -85 89 0 10 7 24 15 31
                14 12 14 15 -1 31 -10 11 -22 19 -28 19 -21 0 -34 15 -41 48 -5 26 -4 32 11
                32 9 0 15 3 11 6 -3 4 0 19 8 35 15 27 47 45 73 40 8 -1 30 8 50 21 21 13 49
                29 65 36 15 6 27 16 27 22 0 9 -36 15 -68 11 -6 -1 -17 11 -24 26 -16 38 -16
                37 -32 24 -8 -7 -20 -9 -27 -5 -8 5 -7 9 5 16 24 13 20 30 -6 26 -19 -2 -25 4
                -33 37 -6 22 -28 67 -50 99 -22 33 -48 71 -58 85 -11 17 -17 43 -16 76 2 70 2
                69 -30 88 -35 20 -33 20 -56 4z"/>
                <path d="M160 1119 c0 -5 -5 -7 -12 -3 -7 4 -8 3 -4 -5 4 -6 1 -22 -8 -35 -14
                -22 -13 -25 3 -40 19 -17 77 -21 99 -7 8 4 12 19 10 32 -3 23 -17 29 -71 30
                -13 0 -16 5 -12 20 4 10 4 19 1 19 -3 0 -6 -5 -6 -11z"/>
                <path d="M291 773 c-17 -18 -21 -103 -5 -103 10 0 11 -17 5 -52 0 -5 -8 -8
                -16 -8 -8 0 -15 -7 -15 -15 0 -8 -6 -15 -12 -15 -7 -1 -2 -7 11 -14 l23 -13
                -32 -7 c-47 -9 -33 -16 43 -20 50 -3 64 -1 61 9 -3 7 2 15 10 18 20 8 21 27 2
                27 -9 0 -16 17 -20 50 -4 27 -13 56 -21 64 -13 12 -13 15 0 20 20 7 19 36 0
                36 -18 0 -20 17 -3 22 8 3 7 6 -3 10 -8 3 -20 -1 -28 -9z"/>
                <path d="M193 684 c-3 -8 -12 -13 -19 -10 -12 5 -19 -6 -11 -18 1 -2 -7 -13
                -17 -25 -25 -28 -10 -43 32 -35 39 8 80 68 61 90 -15 19 -38 18 -46 -2z"/>
                <path d="M587 653 c-4 -3 -7 -11 -7 -17 0 -6 5 -5 12 2 6 6 9 14 7 17 -3 3 -9
                2 -12 -2z"/>
                <path d="M1092 387 c-7 -8 -6 -18 2 -29 12 -17 14 -17 29 0 15 16 15 19 -3 29
                -14 9 -21 9 -28 0z"/>
                <path d="M496 221 c-4 -7 -5 -15 -2 -18 9 -9 19 4 14 18 -4 11 -6 11 -12 0z"/>
                <path d="M483 172 c-6 -4 -9 -19 -6 -34 7 -36 33 -25 33 13 0 30 -6 34 -27 21z"/>
                <path d="M590 71 c0 -10 58 -40 64 -33 3 3 6 13 6 23 0 13 -8 17 -35 16 -19
                -1 -35 -3 -35 -6z"/>
                <path d="M1144 26 c-10 -8 -15 -18 -11 -22 4 -4 15 0 24 9 22 21 12 31 -13 13z"/>
                <path d="M890 20 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                -10 -4 -10 -10z"/>
                <path d="M933 13 c9 -2 23 -2 30 0 6 3 -1 5 -18 5 -16 0 -22 -2 -12 -5z"/>
                </g>
              </svg>
              <h6 class="pt-4 mt-2 mb-0">EROPA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" style="cursor: pointer;" onclick="location.href='/studi-luar';">
          <div class="card card-continent">
            <div class="card-body">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="130.000000pt" height="80.000000pt" viewBox="0 0 176.000000 131.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,131.000000) scale(0.100000,-0.100000)" fill="#0a223d" stroke="none">
                <path d="M725 1289 c-8 -12 23 -38 47 -39 9 0 20 5 23 10 3 6 0 10 -8 10 -8 0
                -17 7 -21 15 -6 17 -32 20 -41 4z"/>
                <path d="M810 1244 c-10 -11 -9 -14 8 -14 25 0 37 16 18 23 -8 3 -20 -1 -26
                -9z"/>
                <path d="M810 1200 c-13 -11 -35 -20 -49 -20 -38 0 -102 -20 -118 -36 -8 -8
                -23 -14 -34 -14 -22 0 -24 -11 -7 -28 7 -7 8 -12 2 -12 -5 0 -16 6 -23 13 -10
                10 -15 8 -27 -7 -13 -19 -14 -19 -14 -2 0 16 -2 17 -17 5 -13 -11 -17 -11 -20
                -1 -7 20 -41 14 -48 -9 -4 -11 -4 -32 -1 -45 6 -22 5 -24 -13 -15 -16 9 -18 8
                -15 -7 3 -11 -8 -26 -31 -42 -29 -21 -35 -32 -36 -65 -1 -22 -1 -44 0 -49 1
                -4 -4 -15 -11 -24 -10 -12 -10 -16 0 -19 6 -3 12 -18 12 -34 0 -16 5 -29 10
                -29 6 0 10 -5 10 -11 0 -8 -17 -10 -55 -5 -53 6 -95 -6 -95 -27 0 -18 28 -36
                49 -30 25 6 28 -5 4 -22 -15 -11 -14 -14 3 -31 19 -19 26 -65 12 -79 -13 -14
                -46 14 -41 35 5 20 -3 25 -64 44 -18 6 -22 4 -17 -8 5 -14 -5 -15 -76 -13 -44
                2 -83 -1 -86 -5 -3 -5 2 -20 10 -33 12 -19 25 -25 51 -25 42 0 46 -6 35 -54
                -7 -33 -5 -45 16 -77 13 -21 24 -42 24 -46 0 -5 9 -19 20 -33 11 -14 20 -33
                20 -42 0 -9 5 -20 10 -23 16 -10 137 55 155 82 15 23 15 26 -2 38 -10 7 -29
                11 -43 9 -20 -4 -30 2 -48 28 -26 39 -12 51 23 18 13 -12 31 -20 39 -17 8 3
                16 1 18 -5 2 -6 25 -11 51 -11 40 1 50 -3 72 -29 14 -16 29 -27 34 -24 5 3 12
                -11 16 -31 4 -20 16 -55 27 -77 l20 -40 14 25 c7 13 14 33 14 44 2 25 69 84
                101 87 19 2 27 -4 39 -29 9 -19 21 -31 28 -28 7 3 15 -2 17 -10 16 -51 16 -50
                25 -35 7 12 13 11 32 -8 22 -20 26 -21 46 -6 28 19 28 34 1 68 -25 32 -20 38
                46 54 81 20 123 80 94 134 -8 14 -8 23 0 31 15 15 14 27 -3 21 -21 -8 -28 12
                -9 27 11 10 17 11 20 3 2 -7 13 -10 23 -7 16 4 21 -1 26 -26 9 -45 38 -42 31
                3 -6 37 14 66 46 66 21 0 73 65 83 104 7 31 7 31 13 -14 6 -45 6 -45 13 -13 4
                18 3 43 -2 55 -5 13 -9 19 -9 14 -1 -5 -8 -3 -16 4 -8 6 -19 9 -24 6 -5 -4
                -13 -1 -16 5 -4 6 8 26 26 46 33 33 36 35 94 31 53 -4 62 -2 78 19 19 24 47
                31 47 12 0 -7 10 -4 26 6 37 24 20 -3 -28 -44 -32 -28 -38 -39 -38 -72 0 -21
                4 -39 9 -39 14 0 66 71 63 86 -4 21 25 46 56 48 15 1 41 10 59 19 18 9 39 17
                48 17 9 0 15 9 15 23 0 40 12 47 47 30 29 -13 34 -14 47 0 14 13 14 16 0 21
                -9 3 -20 4 -25 0 -5 -3 -9 0 -9 6 0 6 -21 21 -47 32 -38 17 -65 21 -134 20
                -72 -2 -88 1 -93 14 -5 12 -14 15 -39 10 -23 -4 -41 0 -62 14 -33 22 -94 27
                -112 9 -6 -6 -27 -11 -47 -12 -20 -1 -36 -5 -36 -10 0 -19 -25 1 -30 24 -5 21
                -12 24 -56 25 -110 1 -144 4 -144 15 0 6 7 8 17 5 10 -4 14 -4 10 0 -4 4 -2
                13 4 20 13 16 -23 38 -50 29 -10 -3 -24 1 -31 10 -16 20 -22 19 -50 -5z"/>
                <path d="M1203 1168 c2 -7 9 -13 15 -12 7 1 24 2 40 3 21 1 24 3 12 11 -22 14
                -73 13 -67 -2z"/>
                <path d="M1240 641 c-8 -16 -7 -19 8 -16 9 2 20 4 25 4 13 2 8 19 -8 25 -8 3
                -19 -3 -25 -13z"/>
                <path d="M1230 599 c0 -19 -41 -59 -61 -59 -30 -1 -69 -50 -39 -50 6 0 10 8
                10 17 0 9 3 14 6 11 3 -4 25 0 49 8 33 12 44 21 48 42 3 15 1 31 -4 37 -6 5
                -9 3 -9 -6z"/>
                <path d="M895 350 c-3 -5 -2 -10 4 -10 5 0 13 5 16 10 3 6 2 10 -4 10 -5 0
                -13 -4 -16 -10z"/>
                <path d="M1017 321 c-5 -20 5 -43 19 -42 5 0 8 -9 6 -19 -4 -24 16 -27 25 -4
                4 11 -1 22 -13 31 -10 8 -18 23 -16 33 4 26 -14 26 -21 1z"/>
                <path d="M780 244 c0 -5 4 -14 8 -19 5 -6 14 -23 20 -38 11 -26 11 -27 -8 -17
                -10 5 -22 15 -25 20 -3 6 -10 10 -16 10 -5 0 12 -27 37 -60 25 -33 49 -60 54
                -60 18 0 20 33 2 46 -12 8 -18 22 -16 36 3 15 -7 35 -26 58 -16 19 -30 30 -30
                24z"/>
                <path d="M1059 231 c-15 -5 -15 -8 -3 -19 12 -11 15 -10 20 3 8 20 3 24 -17
                16z"/>
                <path d="M590 215 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0
                -10 -7 -10 -15z"/>
                <path d="M970 202 c0 -5 -16 -17 -35 -28 -48 -26 -45 -56 7 -69 22 -6 29 -2
                40 22 16 35 17 75 0 81 -6 2 -12 0 -12 -6z"/>
                <path d="M1007 117 c-3 -8 -1 -20 4 -28 7 -12 9 -12 9 0 0 11 3 11 17 0 15
                -13 15 -12 5 8 -9 16 -9 23 1 26 6 3 2 6 -9 6 -12 1 -24 -5 -27 -12z"/>
                <path d="M1144 115 c8 -8 26 -19 40 -25 14 -5 26 -16 26 -24 0 -19 37 -31 54
                -17 9 8 18 7 32 -4 28 -21 36 -18 22 8 -23 41 -97 73 -129 56 -15 -7 -19 -6
                -19 6 0 9 -9 15 -21 15 -18 0 -19 -2 -5 -15z"/>
                <path d="M868 63 c6 -2 18 -2 25 0 6 3 1 5 -13 5 -14 0 -19 -2 -12 -5z"/>
                <path d="M910 59 c0 -5 9 -9 20 -9 11 0 20 2 20 4 0 2 -9 6 -20 9 -11 3 -20 1
                -20 -4z"/>
                </g>
              </svg>
              <h6 class="pt-4 mt-2 mb-0">ASIA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" style="cursor: pointer;" onclick="location.href='/studi-luar';">
          <div class="card card-continent">
            <div class="card-body">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="80.000000pt" viewBox="0 0 160.000000 130.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,130.000000) scale(0.100000,-0.100000)"
                fill="#0a223d" stroke="none">
                <path d="M861 1273 c-6 -16 -13 -53 -15 -83 -7 -91 -34 -130 -68 -97 -7 7 -20
                16 -28 20 -91 45 -105 71 -62 120 20 23 11 30 -45 34 -26 1 -51 7 -57 13 -5 5
                -17 10 -26 9 -10 0 -11 -2 -2 -6 23 -9 12 -23 -18 -23 -23 0 -35 -7 -50 -32
                -11 -18 -18 -39 -15 -45 6 -19 -40 -16 -55 2 -7 8 -20 15 -30 15 -20 0 -70
                -47 -70 -66 0 -8 -7 -14 -16 -14 -10 0 -14 -6 -10 -15 3 -8 1 -15 -4 -15 -6 0
                -10 5 -10 11 0 8 -5 8 -15 -1 -8 -7 -15 -23 -15 -35 0 -25 -35 -75 -53 -75
                -19 0 -109 -48 -138 -74 -15 -14 -30 -22 -33 -19 -3 4 -6 2 -7 -3 0 -5 -2 -22
                -3 -39 -2 -16 3 -40 10 -52 17 -26 18 -37 4 -28 -18 11 -11 -13 16 -52 49 -73
                76 -142 70 -177 -6 -29 -3 -34 16 -40 41 -11 63 -6 92 19 21 18 41 25 72 25
                33 0 44 4 49 19 3 10 18 23 33 28 15 6 43 16 62 23 61 21 79 23 125 10 34 -10
                50 -21 67 -49 12 -20 23 -38 24 -40 2 -2 14 9 27 23 33 36 40 33 22 -11 l-15
                -36 21 19 c21 19 21 19 18 -1 -2 -10 -15 -23 -29 -27 -18 -5 -14 -6 12 -2 36
                5 37 4 47 -34 9 -32 18 -42 51 -55 22 -8 49 -13 60 -10 11 3 27 0 35 -7 12
                -10 20 -9 40 4 13 9 36 16 50 16 17 0 25 5 25 17 0 19 58 114 78 127 28 16 62
                114 62 174 -1 47 -6 64 -30 95 -16 22 -26 45 -24 52 3 7 -4 16 -15 20 -13 4
                -21 15 -21 27 0 12 -19 39 -41 60 -39 37 -46 51 -67 143 -4 17 -17 34 -30 40
                -13 6 -22 19 -22 31 0 21 -26 94 -34 94 -2 0 -9 -12 -15 -27z"/>
                <path d="M1440 469 c0 -7 7 -20 16 -30 24 -27 31 -107 10 -115 -22 -9 -20 -21
                5 -29 17 -6 20 -13 15 -36 -3 -15 -1 -31 4 -34 11 -7 50 52 50 75 0 8 9 21 20
                28 11 7 20 21 20 32 0 22 -16 27 -22 8 -6 -17 -37 -2 -46 23 -5 11 -12 19 -17
                17 -6 -2 -15 13 -21 32 -11 34 -34 54 -34 29z"/>
                <path d="M870 328 c0 -30 22 -88 33 -88 20 0 35 14 46 44 13 33 8 46 -18 39
                -10 -3 -28 0 -40 6 -16 9 -21 9 -21 -1z"/>
                <path d="M1401 228 c-8 -18 -45 -63 -83 -99 -37 -36 -68 -70 -68 -75 0 -5 17
                -14 38 -21 33 -10 39 -9 59 9 12 11 25 33 28 49 5 20 15 31 31 35 13 3 21 10
                18 15 -3 5 4 22 15 38 23 32 28 65 9 58 -7 -2 -17 2 -23 10 -8 10 -13 6 -24
                -19z"/>
                </g>
              </svg>
              <h6 class="pt-4 mt-2 mb-0">AUSTRALASIA</h6>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- End Tujuan Studi-->


    <!-- Start Testimonial-->
    <section class="testimonial">
      <div class="container">

        <div class="sec-title text-center">
          <h2>TESTIMONIAL</h2>
        </div>

        <div class="owl-carousel owl-theme">
          @foreach ($dataTestimonial as $testimoni)
            <div class="item">
              <div class="d-flex justify-content-center">
                <img src="{{ $testimoni["profile_url"] }}" style="width: 120px">
                {{-- <img src="../images/jennifer.png" style="width: 120px"> --}}
              </div>
              <h6 class="mt-5 pt-4 mb-1 text-center name">{{ $testimoni["name"]}}</h6>
              <small class="d-flex justify-content-center status">{{ $testimoni["position"]}}</small>

              <div class="says pt-4 pb-2">
                <p>{{ $testimoni["description"]}}</p>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section>
    <!-- End Testimonial-->


    <!-- Start Berita Terbaru-->
    <section class="berita-terbaru">
      <div class="container">

       <div class="sec-title text-center">
         <h2>BERITA TERBARU</h2>
       </div>

       <div class="row mt-lg-5 mt-4 pt-2">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-news">
            <div class="card-body">
              <img src="images/thumbnail-berita.jpg" class="img-fluid mt-1">
              <p class="kategori pt-4">#EDUKASI</p>
              <h6 class="mb-0">Pre-Departure Briefing Semakin Mantap Berangkat ke Inggris walau dimasa Pandemi</h6>
            </div>
            <div class="author-news ps-3 mb-0 pt-1 pb-1">
              <small><i class="fas fa-user me-1"></i> Rivka Hatmi Vurkana</small> &nbsp; | &nbsp; <small><i class="fas fa-clock me-1"></i> 10/9/2021</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-news">
            <div class="card-body">
              <img src="images/thumbnail-berita.jpg" class="img-fluid mt-1">
              <p class="kategori pt-4">#EDUKASI</p>
              <h6 class="mb-0">Pre-Departure Briefing Semakin Mantap Berangkat ke Inggris walau dimasa Pandemi</h6>
            </div>
            <div class="author-news ps-3 mb-0 pt-1 pb-1">
              <small><i class="fas fa-user me-1"></i> Rivka Hatmi Vurkana</small>&nbsp; | &nbsp; <small><i class="fas fa-clock me-1"></i> 10/9/2021</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-news">
            <div class="card-body">
              <img src="images/thumbnail-berita.jpg" class="img-fluid mt-1">
              <p class="kategori pt-4">#EDUKASI</p>
              <h6 class="mb-0">Pre-Departure Briefing Semakin Mantap Berangkat ke Inggris walau dimasa Pandemi</h6>
            </div>
            <div class="author-news ps-3 mb-0 pt-1 pb-1">
              <small><i class="fas fa-user me-1"></i> Rivka Hatmi Vurkana</small>&nbsp; | &nbsp; <small><i class="fas fa-clock me-1"></i> 10/9/2021</small>
            </div>
          </div>
        </div>
      </div>

      <a href="" class="see-all text-center"><p class="mt-lg-5 mt-3 mb-2">LIHAT SEMUA BERITA</p></a>

      </div>
    </section>
    <!-- End Berita Terbaru-->


    <!-- Awal Section CTA -->
    <section class="sec-CTA">
      <div class="container">
          <div class="row pt-lg-5 pb-5 pt-3 ps-lg-4">
              <div class="col-md-12 col-lg-8 text-lg-start text-center">
                <p class="text-white pb-2 mt-4">Anda punya pertanyaan? <br>
                  Yuk tanyakan lebih detail <br class="d-sm-none"> dengan kami.</p>
                  <button class="btn-contact ps-3 pe-3 mb-5 mb-lg-0 mx-auto" onclick="location.href='/hubungi-kami';">HUBUNGI KAMI</button>
              </div>

              <div class="col-md-12 col-lg-4 text-center">
                <img src="images/customer-service.png" class="img2 img-fluid">
              </div>
          </div>
      </div>
    </section>
    <!-- Akhir Section CTA -->


    <!-- Start Lokasi Kami -->
    <section class="lokasi-kami">
      <div class="container">

       <div class="sec-title text-center">
         <h2>LOKASI KAMI</h2>

         <div class="tab-content mt-lg-5 mt-4 pt-2 pt-lg-0" id="pills-tabContent">
          <div class="tab-pane fade show active" id="jakut" role="tabpanel" aria-labelledby="jakarta-utara">
            <iframe
              class="d-flex mx-auto w-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7454062055203!2d106.91047541476888!3d-6.164839995536726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5329dd58b9b%3A0xb9c530779bb07303!2sEduBridge%20-%20Education%20Consulting!5e0!3m2!1sid!2sid!4v1615101554620!5m2!1sid!2sid"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="jaksel" role="tabpanel" aria-labelledby="jakarta-selatan">
            <iframe
              class="d-flex mx-auto w-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.007276835105!2d106.78377331431064!3d-6.262770663055842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1b3f930f7c9%3A0x7a943bc99682d4d9!2sEduBridge%20Pondok%20Indah!5e0!3m2!1sid!2sid!4v1615158759478!5m2!1sid!2sid"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="jakbar" role="tabpanel" aria-labelledby="jakarta-barat">
            <iframe
              class="d-flex mx-auto w-100"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.169415813749!2d106.757551!3d-6.186292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb7fdf7731087083!2sEduBridge%20Kebon%20Jeruk!5e0!3m2!1sid!2sid!4v1634286393674!5m2!1sid!2sid"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="gadingserpong" role="tabpanel" aria-labelledby="gading-serpong">
            <iframe
            class="d-flex mx-auto w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1877679134104!2d106.62874321476917!3d-6.238965595483846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd792902acbf%3A0xbe058d888b1414df!2sEduBridge%20Gading%20Serpong!5e0!3m2!1sid!2sid!4v1634788041574!5m2!1sid!2sid" width="600" height="450"
            style="border:0;"
            allowfullscreen="" 
            loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="smg" role="tabpanel" aria-labelledby="semarang">
            <iframe
            class="d-flex mx-auto w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2245358206483!2d110.4039568147732!3d-6.982808494955546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b49102db133%3A0x896afc7ade2d7e8b!2sEduBridge%20Semarang!5e0!3m2!1sid!2sid!4v1634788267167!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="sby" role="tabpanel" aria-labelledby="surabaya">
            <iframe
            class="d-flex mx-auto w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.545486628438!2d112.67479641477505!3d-7.292438894736625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc4856b2ec59%3A0xdb23cd8cb0094f63!2sEduBridge%20Education%20Consultant!5e0!3m2!1sid!2sid!4v1634788460057!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="mnd" role="tabpanel" aria-labelledby="manado">
            <iframe
            class="d-flex mx-auto w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5013286100125!2d124.8435074147542!3d1.4721922989263503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877520b3a0fb6f%3A0x3aedd81ff54b572!2sEduBridge%20Manado!5e0!3m2!1sid!2sid!4v1634788603948!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            ></iframe>
          </div>
          <div class="tab-pane fade" id="ponti" role="tabpanel" aria-labelledby="pontianak">
            <iframe
            class="d-flex mx-auto w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8174886170264!2d109.34448741475336!3d-0.036995699973004184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d596fbe62790d%3A0xf323f7a25baac895!2sEduBridge%20Educational%20Consultant!5e0!3m2!1sid!2sid!4v1634788786618!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            ></iframe>
          </div>
         </div>

         <ul class="nav nav-pills branch mt-5" id="pills-tab" role="tablist">

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link active" id="jakarta-utara" data-bs-toggle="pill" data-bs-target="#jakut" type="button" role="tab" aria-controls="jakut" aria-selected="true">Jakarta Utara</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="jakarta-selatan" data-bs-toggle="pill" data-bs-target="#jaksel" type="button" role="tab" aria-controls="jaksel" aria-selected="true">Jakarta Selatan</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="jakarta-barat" data-bs-toggle="pill" data-bs-target="#jakbar" type="button" role="tab" aria-controls="jakbar" aria-selected="true">Jakarta Barat</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="gading-serpong" data-bs-toggle="pill" data-bs-target="#gadingserpong" type="button" role="tab" aria-controls="gadingserpong" aria-selected="true">Gading Serpong</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="semarang" data-bs-toggle="pill" data-bs-target="#smg" type="button" role="tab" aria-controls="smg" aria-selected="true">Semarang</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="surabaya" data-bs-toggle="pill" data-bs-target="#sby" type="button" role="tab" aria-controls="smg" aria-selected="true">Surabaya</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="manado" data-bs-toggle="pill" data-bs-target="#mnd" type="button" role="tab" aria-controls="smg" aria-selected="true">Manado</button>
          </li>

          <li class="nav-item col-12 col-lg-6 col-xl-4 ps-xl-0 ps-lg-4 ps-md-4 ps-sm-2 ps-2 mb-3" role="presentation">
            <button class="nav-link" id="pontianak" data-bs-toggle="pill" data-bs-target="#ponti" type="button" role="tab" aria-controls="smg" aria-selected="true">Pontianak</button>
          </li>
         </ul>
        </div>
      </div>
    </section>
    <!-- End Lokasi Kami -->
    @include('shared/footer')

  
  <!-- Modal -->
  <div class="modal fade" id="ModalPipe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h6 class="modal-title w-100" id="exampleModalLabel">Hallo, Selamat Datang di Edubridge</h5>
        </div>
        <div class="modal-body text-center">
          <img src="https://pipe-psikotes.co.id/src/assets/img/pdf/pipe-color.png" width="70">
          <p class="mt-4 mb-0">Sudah tahu belum kalau kamu bisa <br> mengikuti tes psikotes <strong>GRATIS?</strong></p>
        </div>
          <div class="row align-items-center justify-content-center">
          <div class="row" style="margin-bottom: 20px;">
            <div class="col-6">
              <button class="btn btn-outline-secondary" data-bs-dismiss="modal">NANTI DULU DEH</button>
            </div>
            <div class="col-6">
                <a href="https://pipe-psikotes.co.id/" target="_blank">
                    <button class="btn btn-approve">YA, MAU DONK!</button>
                </a>
            </div>
          </div>
          {{-- </div> --}}
        </div>
        </div>
      </div>
    </div>
  </div>
    {{-- end modal pipe --}}
    <!-- Start Offering modal -->
    {{-- <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Button launch modal
    </button> --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title pt-1 mx-auto" id="exampleModalLabel">HALO, SELAMAT DATANG DI EDUBRIDGE!</h6>
          </div>
          <div class="modal-body text-center">
            <img src="images/pipe-lamp-logo.png" width="70">
            <p class="mt-4 mb-0">Sudah tahu belum kalau kamu bisa <br> mengikuti tes psikotes <strong>GRATIS?</strong></p>
          </div>
          <div class="modal-footer border-0 mx-auto mb-2">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">NANTI DULU DEH</button>
            <button type="button" class="btn btn-approve">YA, MAU DONK!</button>
          </div>
        </div>
      </div>
    </div>
  <!-- End Offering Modal -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

    <!-- Owl Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="owl/owl.carousel.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
          items:1,
          margin:10,
          autoHeight:true,
          nav:true
      });
    </script>
    <script type="text/javascript">
        var flag = "{{ Request::segment(1) }} "
        var myModal = new bootstrap.Modal(document.getElementById('ModalPipe'))
        if (flag ==" ") {
          myModal.show()
        }
        
    </script>


  </body>
</html>