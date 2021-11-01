    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
              <li class="nav-item mt-2 mt-lg-0 mb-2 mb-lg-0">
                <a class="nav-link pb-1 {{($title == "home" ? 'active' : '')}}" aria-current="page" href="/beranda">BERANDA</a>
              </li>
              <li class="nav-item mb-2 mb-lg-0">
                <a class="nav-link pb-1 {{($title == "layanan" ? 'active' : '')}}" href="/layanan-kami" >LAYANAN KAMI</a>
              </li>
              <li class="nav-item mb-2 mb-lg-0">
                <a class="nav-link pb-1 {{($title == "studi" ? 'active' : '')}}" href="/studi-luar">STUDI LUAR NEGERI</a>
              </li>
              <li class="nav-item mb-2 mb-lg-0">
                <a class="nav-link pb-1 {{($title == "kursus" ? 'active' : '')}}" href="/kursus-bahasa">KURSUS BAHASA</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pb-1 mb-2 mb-lg-0 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BERITA & ACARA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">BERITA</a></li>
                  <li><a class="dropdown-item" href="#">ACARA</a></li>
                </ul>
              </li>
              <li class="nav-item mb-2 mb-lg-0">
                <a class="nav-link pb-1" {{($title == "hubung" ? 'active' : '')}} href="/hubungi-kami">HUBUNGI KAMI</a>
              </li>
              <li class="nav-item mb-2 mb-lg-0">
                <a class="nav-link pb-1" href="#">DAFTAR SEKARANG</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar 2 -->