<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/asset/img/apple.svg" type="image/x-icon" />
    <!-- untuk menampilkan logo diatas website -->

    <title>Apple (Indonesia)</title>

    <link rel="stylesheet" href="/asset/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- frontawoseme temlate dari web untuk font -->
    <link rel="stylesheet" href="/asset/vendor/fontawesome/css/all.min.css" />
    <!-- aos animate -->
    <link rel="stylesheet" href="/asset/vendor/aos/dist/aos.css" />
    <!-- custom css memakai style.css -->
    <link rel="stylesheet" href="/asset/css/style.css" />
  </head>
  <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-2">
    <!-- navbar-light bg-white untuk menghilangkan navbar bagian atas menjadi warna putih  -->
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><i class="fa-brands fa-apple"></i></a>
      <!-- <span class="primary">APP</span>LE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- ms auto untuk membuat about kenanan -->
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="/">Home</a>
            <!-- ditambahkan active untuk dipanggil di css style biar bisa ganti warna -->
          </li>
          <!-- ini untuk dropdown item template dari bootstrap -->
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about">About Us</a></li>
              <li><a class="dropdown-item" href="team">Our Team</a></li>
              <li><a class="dropdown-item" href="testimoni">Testimoni</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-bolder" href="service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- endnavbar -->

    <!-- carousel -->
    <!-- untuk memunculkan gambar slide memakai bootstrap -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
     
        @foreach ($sliders as $index => $slider)
        <div class="carousel-item {{ $index === 0 ? 'active' : ''}}">
          {{-- dilakukan perulangan jika index 0 maka akan active jika tidak maka tidak active --}}
          <img src="/image/{{$slider->image}}"
          {{-- foto akan diambil dari slider -> image --}}
          class="d-block w-100 carousel-img" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$slider->title}}</h5>
            {{-- ini untuk mengganti title dinamis --}}
            <p>{{$slider->description}}</p>
          </div>
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- end carousel -->

    <!-- about us -->
    <div class="about-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">ABOUT US</h2>
        </div>
        <!-- pengunaan about us container didalam about us agar garis dibawahnya yg ada di css stay -->
        <div class="row mt-5">
          <!-- data aos animasi biar kiri kekanan -->
          <div class="col-md-6" data-aos="fade-right">
            <h2 class="fw-bold about-us-title">{{$abouts->judul}}</h2>
            <p class="fw-bolder mt-4 about-us-subtitle">
              <!-- mt-4 untuk spasi dari lorem atasnya-->
              {{$abouts->subjudul}}
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>{{$abouts->deskripsi_1}}</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa-solid fa-check"></i>{{$abouts->kelebihan_1}}</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>{{$abouts->kelebihan_2}}</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i> {{$abouts->kelebihan_3}}</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i> {{$abouts->kelebihan_4}}</li>
            </ul>
            <p class="mt-2">{{$abouts->deskripsi_2}}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end about us -->
    <!-- services -->
    <div class="services mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bolder">SERVICES</h2>
        </div>
        <p class="text-center mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit Officia laboriosam id exercitationem .</p>
        <div class="row mt-5">
          @foreach ($services as $service)
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="90">
                </div>
                <div class="card-title mt-4">{{$service->title}}</div>
                <p class="card-description mt-3">{{$service->description}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- end services -->

    <!-- Portofolio us -->
    <div class="Portofolio-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PORTOFOLIO</h2>
        </div>
        <!-- pengunaan Portofolio us container didalam Portofolio us agar garis dibawahnya yg ada di css stay -->
        <div class="row mt-4">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex portofolio-filters">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">All</li>
              <li data-filter=".filter-web" class="py-2 px-4">Web</li>
              <li data-filter=".filter-design" class="py-2 px-4">Design</li>
              <li data-filter=".filter-mobile" class="py-2 px-4">Mobile</li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory portofolio-container" >
              <div class="mansory-sizer"></div>
              <!-- mansory merupakan sebuah javascrip agar gambarnya bisa mengikuti ukuran layar yg ada saat diinsppek -->
                @foreach ($portofolios as $portofolio)
                    
                
              <div class="mansory-item m-2 portofolio-item filter-web" >
                <img src="/asset/img/{{$portofolio->image}}" alt="" class="img-fluid" />
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Portofolio us -->

    <!-- clients -->
    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">CLIENTS</h2>
        </div>
        <div class="row mt-5">
          @foreach ($clients as $client)
              
         
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img src="/asset/img/{{$client->image}}" class="img-fluid brand-image" alt="" />
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- end clients -->

    <!-- footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h2 class="fw-bold">{{$contact->name}}</h2>
              <p>{{$contact->description}}</p>
              <strong>Phone</strong> : <span>{{$contact->telepon}}</span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}}</span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">

                @foreach ($services as $service)
                    
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    {{$service->title}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Mac
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPad
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPhone
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Watch
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    AirPods
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h4>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, eaque.</p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                <button class="btn btn-subscribe text-white" type="button" id="inputGroupFileAddon04">Subscribe</button>
              </div>
            </div>
            <!-- untuk ngelik kembali kehome -->
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <!-- untuk mengatur warna begraoud hitamnya melalui css juga -->
              <div class="copyright">&copy; Copyright <strong>Apple</strong>. All Right Reserved</div>
              <div class="credits">Designed By Me</div>
            </div>
            <div class="col-md-5">
              <div class="sosial-link float-end">
                <!-- float end untuk menaro logo diakhir kanan -->
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- endfooter -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-2">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <!-- <div class="vh-50"></div>
    untuk baris putih kosong dipaling bawah  -->

    <script src="/asset/vendor/jquery/jquery-3.6.4.min.js"></script>
    <script src="/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/vendor/fontawesome/js/all.min.js"></script>
    <script src="/asset/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/asset/vendor/aos/dist/aos.js"></script>
    <script src="/asset/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/asset/js/app.js"></script>
    <!-- script untuk asset bootsrtap dan font awasome -->
  </body>
</html>
