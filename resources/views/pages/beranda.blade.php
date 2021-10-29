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
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <?php $i=0; ?>
        @foreach ($dataBanners as $banners)
          <?php $i++;
            if ($i == 1) {
              $active = "active";
            } else {
              $active = "";
            }
           ?>
          <div class="carousel-item {{$active}}">
            <img src="images/banner-information.jpg" class="d-block w-100 img-fluid">
          </div>
        @endforeach
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

        <button class="mt-4 ps-4 pe-4">PESAN SEKARANG</button>
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
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="card card-continent">
            <div class="card-body">
              <img src="images/amerika-utara.png" width="165">
              <h6 class="pt-4 mt-2 mb-0">AMERIKA UTARA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="card card-continent">
            <div class="card-body">
              <img src="images/eropa.png" width="130">
              <h6 class="pt-4 mt-2 mb-0">EROPA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="card card-continent">
            <div class="card-body">
              <img src="images/eropa.png" width="130">
              <h6 class="pt-4 mt-2 mb-0">ASIA</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card card-continent">
            <div class="card-body">
              <img src="images/australasia.png" width="130">
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
                <button class="btn-contact ps-3 pe-3 mb-5 mb-lg-0 mx-auto">HUBUNGI KAMI</button>  
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

    {{-- modal pipe-psikotes --}}
  
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
        {{-- <div class="modal-footer border-0 mx-auto mb-2"> --}}
          {{-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">NANTI DULU DEH</button>
          <button type="button" class="btn btn-approve">YA, MAU DONK!</button> --}}
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
        {{-- <div class="modal-body">
        <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-12 text-center" style="font-color: #232941;padding-top: 20px;margin-bottom: 20px;" >
                    <img src="https://pipe-psikotes.co.id/src/assets/img/pdf/pipe-color.png" style="height: 150px; width: 150px;" alt="Image placeholder">
                    <p class="pt-2 pl-1 pr-1" style="font-weight: 500;padding-right: 40px;padding-left: 40px;margin-top: 20px;">Sudah tahu belum kalau kamu bisa mengikuti tes psikotes <b>Gratis</b> ?</p>
              </div>
              <div class="row" style="margin-bottom: 20px;">
                <div class="col-6">
                  <button class="btn" data-bs-dismiss="modal">NANTI DULU DEH</button>
                </div>
                <div class="col-6">
                    <a href="https://pipe-psikotes.co.id/" target="_blank">
                        <button class="btn">YA, MAU DONK!</button>
                    </a>
                </div>
              </div>
          </div>
        </div>   --}}
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
         var myModal = new bootstrap.Modal(document.getElementById('ModalPipe'))
         myModal.show()
    </script>
    <script>
      // var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
      // myModal.show();
   </script>


  </body>
</html>