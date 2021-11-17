    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNavDropdown">
            <form class="navbar-form navbar-right" id="search-nav" role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this site"/>
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                  {{-- <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                  </button> --}}
              </div>
            </form>
            <ul class="navbar-nav text-left w-100 justify-content-between" style="padding-left: 0px;">
              <li class="nav-item mt-2 mt-lg-0 mb-2 mb-lg-0" style="padding-left: 0px;">
                <a class="nav-link pb-1 {{($title == "home" ? 'active' : '')}}" aria-current="page" href="/beranda" style="padding-left: 0px;">BERANDA</a>
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
              <li class="nav-item mb-2 mb-lg-0" style="margin-right: 0px;padding-right: 0px;">
                <a class="nav-link pb-1" href="#" style="margin-right: 0px;padding-right: 0px;">DAFTAR SEKARANG</a>
              </li>
            </ul>
          </div>
        </div>
        
      </nav>
      <!-- End Navbar 2 -->