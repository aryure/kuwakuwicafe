<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png"> -->
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Kuwa Kuwi Cafe</title>
  <link rel="stylesheet" href="stride-1.0.0/css/theme.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <style>
    h1 {
      color: #4f5e59;
    }

    /* Gaya tombol berwarna */
    .tombol-berwarna {
      display: inline-block;
      padding: 10px 10px;
      background-color: #4f5e59;
      color: #ffffff;
      /* Warna teks putih untuk kontras */
      text-decoration: none;
      /* Menghapus garis bawah default pada tautan */
      border-radius: 5px;
      /* Memberikan sudut melengkung pada tombol */
    }

    /* Efek hover untuk tombol */
    .tombol-berwarna:hover {
      background-color: #384543;
      color: #ffffff;
      /* Ganti warna latar belakang saat tombol dihover */
    }


    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('./fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

  <!-- NAVBAR START -->
  <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
    <div class="container">
      <a class="navbar-brand pe-4 fs-4" href="/">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layers-half" viewbox="0 0 16 16">
          <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
        </svg> -->
        <img src="img/lgblck.png" width="100" height="100" alt="Deskripsi Gambar">
        <!-- <span class="ms-1 fw-bolder">Kuwa Kuwi Cafe</span> -->
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#services" aria-label="Brings you to the frontpage">
              Services
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">
              Tentang Kami
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">
              Galeri
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">
              Testimoni
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/menu">
              Menu
            </a>
          </li>
        </ul>
        <!-- <a href="https://templatedeck.com" data-splitbee-event="Click Download" aria-label="Download this template" class="link-dark pb-1 link-fancy me-2">
          LALALA <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download ms-1" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
          </svg>
        </a> -->

      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->

  <main>
    <div class="w-100 overflow-hidden bg-gray-100" id="top">

      <div class="container position-relative">
        <!-- <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left"
          style="background-image: url(img/webp/interior11.webp);">
        </div> -->

        <div class="row">
          <div class="mt-5"></div>
          <div class="col-lg-6 col-md-12 col-sm-12 mt-5 py-vh-1 position-relative" data-aos="fade-right">
            <h1 class="display-1 fw-bold mt-5">Kami sudah berlayar dari 2019!</h1>
            <p style="color: #4f5e59;">"aku tidak dapat memberimu hati,
              yang kubisa hanya memberimu kopi, tapi yang jelas kopi mu akan kubuat dengan sepenuh hati"</p>
            <a style="margin-left: 30px;" class="btn tombol-berwarna btn-xl shadow me-3 rounded-2 my-5" href="https://www.google.com/maps/place/Kuwa+Kuwi+Cafe/@-6.2866673,106.7601417,15z/data=!4m6!3m5!1s0x2e69f189e6e2015f:0x6636ae210118623f!8m2!3d-6.2866673!4d106.7601417!16s%2Fg%2F11fkf21l4d?entry=ttu">Kunjungi Kami</a>
            <a style="margin-left: 30px;" class="btn tombol-berwarna btn-xl shadow me-3 rounded-2 my-5" href="https://wa.me/+6281293209055">Info Reservasi</a>
          </div>
          <!-- <div class="col-lg-6 position-relative" data-aos="fade-left">
            <video controls looping src="vid/coba.mp4" class="h-100 w-100" type="video/mp4"> </video>
          </div> -->
        </div>
      </div>

    </div>

    <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
      <div class="container">

        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="row gx-5 d-flex">
              <div class="col-md-11">
                <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end" data-aos="fade-right" style="background-image: url(img/ft1.jpg);--bs-aspect-ratio: 50%;">
                </div>
              </div>
              <div class="col-md-5 offset-md-1">
                <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end" data-aos="fade-up" style="background-image: url(img/ft2.jpg);">
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left" style="background-image: url(img/ft4.jpg);--bs-aspect-ratio: 150%;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h3 class="py-5 border-top border-dark" data-aos="fade-left">Kuwa kuwi cafe bersedia menerima reservasi untuk acara,
              seperti Meeting, Ulang Tahun, Reuni dan Lainnya.
            </h3>
            <p data-aos="fade-left" data-aos-delay="200">Disetiap kesempatan kami akan terus berkembang
              untuk menunjukan pelayan terbaik kami kepada pelanggan tercinta kami.
            </p>
            <!-- <p>
              <a href="#" class="link-fancy link-dark" data-aos="fade-left" data-aos-delay="400">Learn more
              </a>
            </p> -->
          </div>
        </div>

      </div>
    </div>

    <div class="small py-vh-3 w-100 overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-box-seam" viewbox="0 0 16 16">
                  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h5 my-2">Tersedia Layanan Online</h3>
                <p>Sekarang kami juga tersedia di layanan online kesayangan anda untuk pemesanan makanan ataupun minuman...</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-card-checklist" viewbox="0 0 16 16">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                </svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h5 my-2">Kualitas Terjaga</h3>
                <p>Kami sangat peduli dengan Kualitas makanan ataupun minuman untuk konsumen kami didalam cafe ataupun diluar!</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-window-sidebar" viewbox="0 0 16 16">
                  <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                  <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                </svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h5 my-2">Terbuka dengan Kritikan</h3>
                <p>Dengan senang hati kami nemerima keritikan untuk membangun kuwa kuwi cafe lebih bagus lagi kedepannya.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="position-relative overflow-hidden w-100 bg-light" id="gallery">
      <div class="container-fluid">
        <div class="row overflow-scroll">
          <div class="col-12">
            <div class="row vw-100 px-0 py-vh-5 d-flex align-items-center scrollx">
              <div class="col-md-2" data-aos="fade-up">
                <img src="img/galeri1.jpg" class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
              </div>

              <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                <img src="img/galeri2.jpg" class="img-fluid rounded shadow" alt="nice gallery image" width="1164" height="776">
              </div>

              <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <img src="img/galeri3.jpg" class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="1054">
              </div>

              <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                <img src="img/galeri4.jpg" class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="562">
              </div>

              <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
                <img src="img/galeri5.jpg" class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-vh-5 w-100 overflow-hidden" id="numbers">
      <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-lg-5">
            <h3 class="py-5 border-top border-dark" data-aos="fade-right">Moto Kuwa Kuwi Cafe</h3>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <h2 class="display-6 mb-5" data-aos="fade-down">Melayani Pelanggan Dengan Sepenuh Hati!</h2>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="bg-light w-100 overflow-hidden" id="testimonials">
      <div class="container py-vh-6">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 text-center">
            <h2 class="display-6">Disukai oleh para pengunjung</h2>
            <p class="lead">Kami membangun image kuwa kuwi sebagai tempat yang dapat dikunjungi dari berbagai kalangan!
              Kamu masih ga percaya? yuk coba kamu Kunjungi sendiri ke sini :D
            </p>
          </div>
          <div class="col-12 mt-4">
            <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">

              <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                <div class="card p-4 mt-3 border-0">
                  <div class="card-body">
                    <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                        <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                      </svg>
                    </div>
                    <blockquote class="blockquote">
                      <p>"Cozy Place!!! Tp sayang plang namanya terlalu kecil jadi kesannya hidden gem dan lagi ga banyak yang tau ternyata tempatnya di lantai 2.
                        tp se worth itu woi tempatnya.... Apalagi setiap jumat - minggu ada live acoustic."</p>
                    </blockquote>
                    <div class="d-flex justify-content-between border-top pt-3">
                      <div>
                        <span class="h6 fw-5">Hendra Gilbert</span><br>
                        <!-- <small class="text-muted">COO, The Boo Corp.</small> -->
                      </div>
                      <img src="img/webp/person9.webp" width="48" height="48" class="rounded-circle" alt="" data-aos="fade">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-4">
                <div class="card p-4 shadow mt-3 border-0" data-aos="fade-down">
                  <div class="card-body">
                    <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                      </svg>
                    </div>
                    <blockquote class="blockquote">
                      <p>"Tempatnya cozy parah, enak untuk santai² ataupun sambil ngerjain tugas
                        sayangnya tempatnya tersembunyi jadi kayak hidden gem, sama kalo bisa live acousticnya tiap hari dong."</p>
                    </blockquote>
                    <div class="d-flex justify-content-between border-top pt-3">
                      <p class="card-text">
                        <span class="h6 fw-5">Arya Yudha Reynardo</span><br>
                        <!-- <small class="text-muted">Daughter of Col. John Matrix, Commando.</small> -->
                      </p>
                      <img src="img/webp/person3.webp" width="48" height="48" class="rounded-circle" alt="" data-aos="fade">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-4">
                <div class="card p-4 mt-3 border-0" data-aos="fade-left">
                  <div class="card-body">
                    <div class="text-dark py-2 fs-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                      </svg>
                    </div>
                    <blockquote class="blockquote">
                      <p>"Tempat ngumpul utk menikmati minuman /makanan ringan & kopi dgn harga yg terjangkau
                        Ada live musik & pengunjung juga bisa ikutan nyanyi atau main musik."</p>
                    </blockquote>
                    <div class="d-flex justify-content-between border-top pt-3">
                      <p class="card-text">
                        <span class="h6 fw-5">Giri Soegiriawan</span><br>
                        <!-- <small class="text-muted">Detective, Somewhere in the swamps</small> -->
                      </p>
                      <img src="img/webp/person8.webp" width="48" height="48" class="rounded-circle" alt="" data-aos="fade">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <script src="stride-1.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="stride-1.0.0/js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // values from 0 to 3000, with step 50ms
    });
  </script>

  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function() {
      scrollpos = window.scrollY;

      if (scrollpos >= header_height) {
        add_class_on_scroll();
      } else {
        remove_class_on_scroll();
      }

      console.log(scrollpos);
    })
  </script>

</body>

</html>