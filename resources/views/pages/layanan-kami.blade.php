<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edubridge | Layanan Kami</title>

    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="../css/style-layanan-kami.css">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="../owl/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../owl/owl.theme.default.css">

  </head>
  <body>

    @include('shared/header')
    @include('shared/navbar')

    <!-- Start Layanan Kami-->
    <section class="layanan-kami">
      <div class="container">

       <div class="sec-title text-center">
         <h2>LAYANAN KAMI</h2>
       </div> 

       <div class="line mx-auto mt-md-5"></div>

       <div class="menu-pills mt-5">
         <ul class="nav nav-pills pt-2 pb-2 d-flex justify-content-evenly ps-2 mb-3" id="pills-tab" role="tablist">
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0 active" id="pills-tentang-kami-tab" data-bs-toggle="pill" data-bs-target="#pills-tentang-kami" type="button" role="tab" aria-controls="pills-tentang-kami" aria-selected="true">TENTANG KAMI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-layanan-kami-tab" data-bs-toggle="pill" data-bs-target="#pills-layanan-kami" type="button" role="tab" aria-controls="pills-layanan-kami" aria-selected="false">LAYANAN KAMI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-tips-perencanaan-studi-tab" data-bs-toggle="pill" data-bs-target="#pills-tips-perencanaan-studi" type="button" role="tab" aria-controls="pills-tips-perencanaan-studi" aria-selected="false">TIPS PERENCANAAN STUDI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-tips-studi-keluar-negeri-tab" data-bs-toggle="pill" data-bs-target="#pills-tips-studi-keluar-negeri" type="button" role="tab" aria-controls="pills-tips-studi-keluar-negeri" aria-selected="false">TIPS STUDI KELUAR NEGERI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-pendampingan-tab" data-bs-toggle="pill" data-bs-target="#pills-pendampingan" type="button" role="tab" aria-controls="pills-pendampingan" aria-selected="false">PENDAMPINGAN</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto me-xl-2" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-testimonial-tab" data-bs-toggle="pill" data-bs-target="#pills-testimonial" type="button" role="tab" aria-controls="pills-testimonial" aria-selected="false">TESTIMONIAL</button>
          </li>
        </ul>

        <!-- Start Content NAV PILLS  -->

        <div class="tab-content mt-5" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-tentang-kami" role="tabpanel" aria-labelledby="pills-tentang-kami-tab">

            <h5 class="sub-title-nav-pills text-center mb-5">Tentang Kami</h5>
            
            <img src="{{$dataTentang["cover"]['url']}}" class="img-fluid">

            <div class="desc-tentang-kami">
              <?php echo htmlspecialchars_decode(stripslashes($dataTentang['contents'][0]['value'])); ?>
            </div>

            {{-- <h4 class="slogan text-center mt-5 pb-3 pb-lg-0"><i>We Bridge Because We Care</i></h4> --}}

          </div>

          <div class="tab-pane fade" id="pills-layanan-kami" role="tabpanel" aria-labelledby="pills-layanan-kami-tab">

            <h5 class="sub-title-nav-pills text-center mb-5"><?php echo htmlspecialchars_decode(stripslashes($dataLayanan['contents'][0]['value'])); ?></h5>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <?php 
              $length = count($dataLayanan['contents'][1]['value']);
              for ($i=0; $i < $length; $i++) {
                if (isset($dataLayanan['contents'][1]['value'][$i])) {?>
                  <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button {{ $i == 0 ? "" : "collapsed" }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$i?>" aria-expanded="{{ $i == 0 ? "true" : "false" }}" aria-controls="panelsStayOpen-collaps<?=$i?>">
                        <?php echo htmlspecialchars_decode(stripslashes($dataLayanan['contents'][1]['value'][$i]['title'])); ?>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse<?=$i?>" class="accordion-collapse collapse {{ $i == 0 ? "show" : " " }}" aria-labelledby="panelsStayOpen-heading<?=$i?>">
                      <div class="accordion-body ">
                        <?php echo htmlspecialchars_decode(stripslashes($dataLayanan['contents'][1]['value'][$i]['body'])); ?>
                      </div>
                    </div>
                  </div>
          <?php  } 
              }  
          ?>       
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips-perencanaan-studi" role="tabpanel" aria-labelledby="pills-tips-perencanaan-studi-tab">
            <h5 class="sub-title-nav-pills text-center mb-5"><?php echo htmlspecialchars_decode(stripslashes($dataRencana['contents'][0]['value'])); ?></h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <?php
                  $lengthRencana = count($dataRencana['contents'][1]['value']);
                  for ($i = 0; $i < $lengthRencana; $i++) {
                      if (isset($dataRencana['contents'][1]['value'][$i])) {?>
                        <div class="accordion-item mb-2">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button {{ $i == 0 ? "" : "collapsed" }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$i?>-tips-perencanaan-studi" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <?php echo htmlspecialchars_decode(stripslashes($dataRencana['contents'][1]['value'][$i]['title'])); ?>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapse<?=$i?>-tips-perencanaan-studi" class="accordion-collapse collapse {{ $i == 0 ? "show" : " " }}" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body ">
                              <?php echo htmlspecialchars_decode(stripslashes($dataRencana['contents'][1]['value'][$i]['body'])); ?>
                            </div>
                          </div>
                        </div>
              <?php   }
                    }  
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips-studi-keluar-negeri" role="tabpanel" aria-labelledby="pills-tips-studi-keluar-negeri-tab">
            <h5 class="sub-title-nav-pills text-center mb-5"><?php echo htmlspecialchars_decode(stripslashes($dataTips['contents'][0]['value'])); ?></h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <?php
                  $lengthtips = count($dataTips['contents'][1]['value']);
                  for ($i = 0; $i < $lengthtips; $i++) {
                      if (isset($dataTips['contents'][1]['value'][$i])) {?>
                        <div class="accordion-item mb-2">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button {{ $i == 0 ? "" : "collapsed" }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$i?>-tips-studi-ke-luar-negeri" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <?php echo htmlspecialchars_decode(stripslashes($dataTips['contents'][1]['value'][$i]['title'])); ?>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapse<?=$i?>-tips-studi-ke-luar-negeri" class="accordion-collapse collapse {{ $i == 0 ? "show" : " " }}" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body ">
                              <?php echo htmlspecialchars_decode(stripslashes($dataTips['contents'][1]['value'][$i]['body'])); ?>
                            </div>
                          </div>
                        </div>
              <?php   }
                    }  
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-pendampingan" role="tabpanel" aria-labelledby="pills-pendampingan-tab">
            <h5 class="sub-title-nav-pills text-center mb-5"><?php echo htmlspecialchars_decode(stripslashes($dataPendampingan['contents'][0]['value'])); ?></h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <?php
                  $lengthpendampingan = count($dataPendampingan['contents'][1]['value']);
                  for ($i = 0; $i < $lengthtips; $i++) {
                      if (isset($dataPendampingan['contents'][1]['value'][$i])) {?>
                        <div class="accordion-item mb-2">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button {{ $i == 0 ? "" : "collapsed" }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$i?>-pendampingan" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <?php echo htmlspecialchars_decode(stripslashes($dataPendampingan['contents'][1]['value'][$i]['title'])); ?>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapse<?=$i?>-pendampingan" class="accordion-collapse collapse {{ $i == 0 ? "show" : " " }}" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body ">
                              <?php echo htmlspecialchars_decode(stripslashes($dataPendampingan['contents'][1]['value'][$i]['body'])); ?>
                            </div>
                          </div>
                        </div>
              <?php   }
                    }  
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-testimonial" role="tabpanel" aria-labelledby="testimonial-tab">
            <!-- Start Testimonial-->
            <section class="testimonial">
              <div class="container">

                <h5 class="sub-title-nav-pills text-center">PENDAPAT MEREKA MENGENAI EDUBRIDGE</h5>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="d-flex justify-content-center">
                      <img src="../images/jennifer.png" style="width: 120px">
                    </div>
                    <h6 class="mt-5 pt-4 mb-1 text-center name">JENNIFER ELJAPA</h6>
                    <small class="d-flex justify-content-center status">a student of Newcastle University UK</small>

                    <div class="rating-star text-center mt-3">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <div class="says pt-3 pb-2">
                      <p>EduBridge has been of a great help to my academic journey. They trully bridge our passion with the career prospect. The consultants give me a vast knowledge for which sults best among the many major options provided so I can sult my own.</p>

                      <p>It's another great point for them to help me through my early days during my adapting process in UK. Thank you EduBridge, I really could'nt ask for more.</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="d-flex justify-content-center">
                      <img src="../images/jennifer.png" style="width: 120px">
                    </div>
                    <h6 class="mt-5 pt-4 mb-1 text-center name">ARGON SUNDORO</h6>
                    <small class="d-flex justify-content-center text-center status">a student of University of Sunderland UK</small>

                    <div class="rating-star text-center mt-3">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <div class="says pt-3 pb-2">
                      <p>EduBridge brings clear eyes to a school search. They bring an insight of which courses or schools thats suits me best. Having their broad vision and expertise, EduBridge shapes both the school and career plans. Most importantly, they can see and think critically about my school choices, providing guidance driven and shaped what's best for my career.</p>

                      <p>EduBridge also helps me with administration problems. They handled it very professionally with no errors, and I can say that without EduBridge I would not be a student at the University of Sunderland, EduBridge is undoubtedly the best!</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="d-flex justify-content-center">
                      <img src="../images/jennifer.png" style="width: 120px">
                    </div>
                    <h6 class="mt-5 pt-4 mb-1 text-center name">MR. SUKARTONO T</h6>
                    <small class="d-flex justify-content-center text-center status">Parent of Nikita - University of Tasmania Bachelor of Agricultular Sciences</small>

                    <div class="rating-star text-center mt-3">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <div class="says pt-3 pb-2">
                      <p>EduBridge sangat membantu putri saya menemukan jurusan yang sesuai dengan keinginannya. Konsultan EduBridge ibarat membawa dia tour keliling dunia dan membantu menemukan universitas pilihannya sebelum akhirnya dia memilih University of Tasmania sebagai tujuannya. She is very happy now with her choice and she loves her life in Hobart. Thank you EduBridge, EduBridge is doing their job being an Education Consultant for real.</p>
                    </div>
                  </div>
                </div>

              </div>
            </section>
            <!-- End Testimonial-->
          </div>
        </div>
       </div>

     </div>
   </section>
    <!-- End Layanan Kami -->


    @include('shared/footer')

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
    <script type="text/javascript" src="../owl/owl.carousel.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
          items:1,
          margin:10,
          autoHeight:true,
          nav:false
      });
    </script>

  </body>
</html>