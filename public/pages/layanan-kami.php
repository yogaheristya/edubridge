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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>

  <?php
  include('navbar.php')
  ?>


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
            <button class="nav-link mx-auto mx-xl-0" id="pills-tentang-kami-tab" data-bs-toggle="pill" data-bs-target="#pills-tentang-kami" type="button" role="tab" aria-controls="pills-tentang-kami" aria-selected="true">TENTANG KAMI</button>
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
            <button class="nav-link mx-auto mx-xl-0 active" id="pills-testimonial-tab" data-bs-toggle="pill" data-bs-target="#pills-testimonial" type="button" role="tab" aria-controls="pills-testimonial" aria-selected="false">TESTIMONIAL</button>
          </li>
        </ul>

        <!-- Start Content NAV PILLS  -->

        <div class="tab-content mt-5" id="pills-tabContent">
          <div class="tab-pane fade " id="pills-tentang-kami" role="tabpanel" aria-labelledby="pills-tentang-kami-tab">

            <h5 class="sub-title-nav-pills text-center mb-5">TENTANG EDUBRIDGE EDUCATION CONSULTING</h5>

            <img src="../images/banner-layanan-kami.jpg" class="img-fluid">

            <div class="desc-tentang-kami">
              <p><strong>EDUBRIDGE EDUCATION CONSULTING</strong> adalah lembaga konsultasi pendidikan ke luar negeri untuk calon pelajar yang berencana melanjutkan studi ke luar negeri, seperti ke Amerika, Kanada, Inggris, Irlandia, Swiss, Jerman, Prancis, Spanyol, Norwegia, China, Hong Kong, Jepang, Korea, Malaysia, Singapura, Australia, dan Selandia Baru. EduBridge juga merupakan Lembaga Pendidikan yang menyediakan program kursus bahasa Inggris dan Mandarin. Tim konselor kami adalah para profesional berdedikasi yang memiliki pengalaman tinggal, bekerja dan belajar di luar negeri demi memberikan pelayanan yang terbaik.</p>

              <p><strong>EDUBRIDGE EDUCATION CONSULTING</strong> memahami bahwa klien adalah partner yang berharga, dengan demikian kami senantiasa mencoba untuk melakukan diskusi secara mendalam dan terarah dalam menganalisa bakat dan kemampuan setiap individu secara terbuka dan jujur untuk memperoleh hasil terbaik untuk setiap rencana studi ke luar negeri.</p>

              <p><strong>EDUBRIDGE EDUCATION CONSULTING</strong> juga menekankan pentingnya mengunjungi institusi representatif kami demi memperoleh informasi yang terbaru dan akurat sehingga calon murid mampu memutuskan jurusan dan universitas yang paling tepat dan terbaik sesuai dengan minat dan kemampuannya.</p>
            </div>

            <h4 class="slogan text-center mt-5 pb-3 pb-lg-0"><i>We Bridge Because We Care</i></h4>

          </div>
          <div class="tab-pane fade" id="pills-layanan-kami" role="tabpanel" aria-labelledby="pills-layanan-kami-tab">

            <h5 class="sub-title-nav-pills text-center mb-5">PENAWARAN TERBAIK KAMI</h5>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne-layanan-kami" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. GRATIS KONSULTASI JURUSAN & KARIR
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne-layanan-kami" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body ">
                    <p class="mb-0"><strong>EduBridge</strong> menyediakan layanan gratis konsultasi jurusan kuliah ter-update dengan peluang karir hingga informasi mengenai universitas dan negara tujuan agar setiap calon mahasiswa dapat memutuskan jurusan dan universitas yang paling tepat dan terbaik sesuai dengan minat dan kemampuannya. Layanan konsultasi kami juga disertai dengan Psikotest yang bersifat opsional bila dibutuhkan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo-layanan-kami" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. GRATIS PENGURUSAN APLIKASI
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo-layanan-kami" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p class="mb-0"><strong>EduBridge</strong> memberikan layanan pengurusan aplikasi sekolah, penanganan tiket pesawat dan visa studi, serta pengaturan tempat tinggal dan guardian untuk calon murid yang berusia di bawah 18 tahun. Layanan ini bersifat gratis untuk para calon murid yang mendaftar ke institusi partner EduBridge.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree-layanan-kami" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3. GRATIS PENDAMPINGAN
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree-layanan-kami" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p class="mb-0"><strong>EduBridge</strong> mendukung penuh setiap calon murid yang melakukan studi lanjutannya dengan menyediakan pendampingan gratis di negara tujuan kuliah bersama representatif EduBridge; seperti China, Hong Kong, Singapore, Malaysia, dan Inggris. Layanan pendampingan ini pada umumnya diperuntukkan membantu calon murid untuk pembelian sim-card, pembukaan bank account, familiarisasi lingkungan sekitar dan kebutuhan lainnya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips-perencanaan-studi" role="tabpanel" aria-labelledby="pills-tips-perencanaan-studi-tab">
            <h5 class="sub-title-nav-pills text-center mb-5">TIPS PERENCANAAN STUDI & KONSULTASI</h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne-tips-perencanaan-studi" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. STUDENT INTERVIEW & KONSULTASI
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne-tips-perencanaan-studi" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body ">
                    <p class="mb-0">Konselor <strong>EduBridge</strong> akan melakukan pendataan dan eksplorasi minat, bakat dan kemampuan akademis siswa untuk mendapatkan gambaran awal terhadap calon murid sebelum melakukan konsultasi lebih lanjut.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo-tips-perencanaan-studi" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. PEMETAAN JURUSAN & KARIR
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo-tips-perencanaan-studi" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p class="mb-0">Konselor <strong>EduBridge</strong> memberikan pilihan-pilihan jurusan kuliah yang telah disesuaikan dengan minat dan kemampuan akademis serta prospek karir yang tepat. Proses ini dapat dimaksimalkan dengan bantuan PIPE Psikotest yang bersifat opsional.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree-tips-perencanaan-studi" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3. PERHITUNGAN BUDGET STUDI
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree-tips-perencanaan-studi" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p class="mb-0">Konselor <strong>EduBridge</strong> memberikan estimasi rincian biaya studi dan biaya hidup sesuai dengan preferensi tujuan siswa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips-studi-keluar-negeri" role="tabpanel" aria-labelledby="pills-tips-studi-keluar-negeri-tab">
            <h5 class="sub-title-nav-pills text-center mb-5">10 TIPS STUDI KELUAR NEGERI</h5>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne-tips-studi-keluar-negeri" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. PROFILLING & KONSULTASI
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne-tips-studi-keluar-negeri" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body ">
                    <p class="mb-0">Dimulai dengan melalukan eksplorasi minat, bakat dan kemampuan akademis untuk menyesuaikan dengan pilihan jurusan, budget studi, arah karir, preferensi universitas serta negara tujuan yang tepat.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo-tips-studi-keluar-negeri" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. PEMNDAFTARAN SEKOLAH/UNIVERSITAS
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo-tips-studi-keluar-negeri" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p class="mb-0">Setelah menemukan jurusan, universitas, dan negara yang tepat, selanjutnya calon murid mempersiapkan dokumen yang dibutuhkan untuk pendaftaran aplikasi sekolah atau universitas yang dituju.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree-tips-studi-keluar-negeri" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3. SIMULASI & PERSIAPAN IELTS
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree-tips-studi-keluar-negeri" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p class="mb-0">Melakukan simulasi Try Out untuk mengetahui kemampuan berbahasa Inggris dan kursus persiapan IELTS agar dapat mencapai target skor yang dibutuhkan oleh sekolah atau universitas tujuan.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-pendampingan" role="tabpanel" aria-labelledby="pendampingan-tab">
            <h5 class="sub-title-nav-pills text-center">ASISTENSI DI NEGARA TUJUAN</h5>
            <h6 class="text-center mb-5" style="color: #0A223D">Syarat & Ketentuan berlaku</h6>
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne-pendampingan" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. PENJEMPUTAN DI BANDARA
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne-pendampingan" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body ">
                    <p class="mb-0">Tim <strong>EduBridge</strong> akan menjemput student yang tiba di bandara negara tujuan.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo-pendampingan" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. REGISTRASI ULANG
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo-pendampingan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p class="mb-0">Tim <strong>EduBridge</strong> akan mendampingi student saat registrasi ulang di kampus, sesuai dengan jadwal yang sudah ditentukan kampus.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree-pendampingan" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3. CHECK-IN DORMITORY
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree-pendampingan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <p class="mb-0">Tim <strong>EduBridge</strong> akan membantu student saat check in dorm di university masing-masing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade show active" id="pills-testimonial" role="tabpanel" aria-labelledby="testimonial-tab">
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


  <?php
  include('footer.php')
  ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script type="text/javascript">
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>

</body>

</html>