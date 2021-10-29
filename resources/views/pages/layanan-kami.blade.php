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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-layanan-kami.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-footer.css')}}">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"crossorigin="anonymous">

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

       <div class="line mx-auto mt-5"></div>

       <div class="menu-pills mt-5">
         <ul class="nav nav-pills pt-2 pb-2 d-flex justify-content-evenly ps-2 mb-3" id="pills-tab" role="tablist">
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-tentang-kami-tab" data-bs-toggle="pill" data-bs-target="#pills-tentang-kami" type="button" role="tab" aria-controls="pills-tentang-kami" aria-selected="true">TENTANG KAMI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0 active" id="pills-layanan-kami-tab" data-bs-toggle="pill" data-bs-target="#pills-layanan-kami" type="button" role="tab" aria-controls="pills-layanan-kami" aria-selected="false">LAYANAN KAMI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-tips-perencanaan-studi-tab" data-bs-toggle="pill" data-bs-target="#pills-tips-perencanaan-studi" type="button" role="tab" aria-controls="pills-tips-perencanaan-studi" aria-selected="false">TIPS PERENCANAAN</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-tips-studi-keluar-negeri-tab" data-bs-toggle="pill" data-bs-target="#pills-tips-studi-keluar-negeri" type="button" role="tab" aria-controls="pills-tips-studi-keluar-negeri" aria-selected="false">TIPS STUDI KELUAR NEGERI</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-pendampingan-tab" data-bs-toggle="pill" data-bs-target="#pills-pendampingan" type="button" role="tab" aria-controls="pills-pendampingan" aria-selected="false">PENDAMPINGAN</button>
          </li>
          <li class="nav-item col-12 col-md-4 col-xl-auto" role="presentation">
            <button class="nav-link mx-auto mx-xl-0" id="pills-testimonial-tab" data-bs-toggle="pill" data-bs-target="#pills-testimonial" type="button" role="tab" aria-controls="pills-testimonial" aria-selected="false">TESTIMONIAL</button>
          </li>
        </ul>

        <!-- Start Content NAV PILLS  -->

        <div class="tab-content mt-5" id="pills-tabContent">
          <div class="tab-pane fade" id="pills-tentang-kami" role="tabpanel" aria-labelledby="pills-tentang-kami-tab">
            TENTANG KAMI
          </div>
          <div class="tab-pane fade show active" id="pills-layanan-kami" role="tabpanel" aria-labelledby="pills-layanan-kami-tab">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  GRATIS KONSULTASI JURUSAN & KARIR
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="pills-tips-perencanaan-studi" role="tabpanel" aria-labelledby="pills-tips-perencanaan-studi-tab">TIPS PERENCANAAN STUDI</div>
          <div class="tab-pane fade" id="pills-tips-studi-keluar-negeri" role="tabpanel" aria-labelledby="pills-tips-studi-keluar-negeri-tab">TIPS STUDI KELUAR NEGERI</div>
          <div class="tab-pane fade" id="pills-pendampingan" role="tabpanel" aria-labelledby="pendampingan-tab">PENDAMPINGAN</div>
          <div class="tab-pane fade" id="pills-testimonial" role="tabpanel" aria-labelledby="testimonial-tab">TESTIMONIAL</div>
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

  </body>
</html>