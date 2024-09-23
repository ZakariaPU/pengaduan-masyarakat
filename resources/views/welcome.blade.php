<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIGAPNET</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_sigapnet.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sistem Informasi Pengaduan Layanan Internet & Telepon</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami siap membantu! Laporkan masalah Anda di sini untuk penyelesaian yang cepat dan aman.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('login')}}" class="btn-get-started scrollto">Pengaduan</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Mekanisme Pengaduan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
          <div class="section-title" data-aos="fade-up">
              <h2>ABOUT ME</h2>
          </div>
  
          <div class="row content">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                  <h3>PLATFORM SIGAPNET</h3>
                  <p>
                      Adalah platform digital yang dirancang untuk memfasilitasi masyarakat dalam menyampaikan keluhan terkait gangguan layanan internet dan telepon. Sistem ini mempermudah proses pelaporan, pemantauan, dan penyelesaian gangguan melalui alur yang terintegrasi antara pelanggan, penyedia layanan, dan pihak terkait lainnya.
                  </p>
                  <h3>TUJUAN SIGAPNET</h3>
                  <ul>
                      <li><i class="ri-check-double-line"></i> Memfasilitasi pelanggan untuk melaporkan gangguan layanan internet dan telepon dengan cepat dan efisien melalui platform online yang mudah diakses.</li>
                      <li><i class="ri-check-double-line"></i> Meningkatkan efisiensi penyedia layanan dalam menangani keluhan, dengan sistem yang secara otomatis mengarahkan laporan kepada tim terkait dan memantau perkembangan penanganan.</li>
                  </ul>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <h3>KOMITMEN SIGAPNET</h3>
                  <p>
                      Kami berkomitmen untuk memberikan pelayanan terbaik dan transparan dalam menangani setiap keluhan masyarakat. Kami percaya bahwa kepercayaan pelanggan terhadap layanan internet dan telepon sangat penting, dan SIGAPNET hadir untuk memastikan bahwa setiap gangguan dapat segera teratasi dengan cepat dan tepat.
                  </p>
                  <a href="#services" class="btn-learn-more">Mekanisme Alur Pengaduan</a>
              </div>
          </div>
      </div>
    </section><!-- End About Us Section -->
  
      <style>
      .about p {
          text-align: justify; /* Mengatur teks agar rata kiri-kanan */
      }
      .about ul {
          text-align: justify; /* Mengatur teks dalam list agar rata kiri-kanan juga */
      }
      </style>
  

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengguna</strong><br>Jumlah Pengguna SIGAPNET</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengaduan</strong> <br> Jumlah Pengaduan yang Dilaporkan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Selesai</strong> <br> Jumlah Laporan yang Berhasil Ditangani</p>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>MEKANISME ALUR PENGADUAN</h2>
          <p>Berikut Merupakan Alur Pengaduan SIGAPNET</p>
        </div>
    
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Ajukan Pengaduan</a></h4>
              <p class="description">Pengguna mengisi detail laporan dengan lengkap, termasuk deskripsi masalah, waktu kejadian, dan lokasi. Jika diperlukan, pengguna juga bisa mengunggah bukti seperti tangkapan layar atau foto.</p>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Verifikasi</a></h4>
              <p class="description">Setelah Anda mengirimkan laporan gangguan melalui SIGAPNET, laporan tersebut akan masuk ke sistem kami untuk diverifikasi oleh admin atau petugas yang berwenang. Proses verifikasi ini bertujuan untuk memastikan bahwa semua informasi yang Anda berikan sudah lengkap dan akurat sehingga penanganan gangguan dapat dilakukan dengan tepat.</p>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Proses Penanganan</a></h4>
              <p class="description">Setelah laporan Anda diverifikasi oleh admin/petugas, proses penanganan gangguan akan segera dimulai. Laporan Anda kini dalam tahap proses dan tindak lanjut oleh tim teknis atau penyedia layanan yang bertanggung jawab.</p>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Pengaduan Selesai</a></h4>
              <p class="description">Kami dengan senang hati menginformasikan bahwa laporan pengaduan Anda telah selesai ditindak. Tim teknis kami telah melakukan langkah-langkah yang diperlukan untuk menyelesaikan gangguan yang Anda laporkan, dan layanan Anda kini seharusnya kembali berfungsi dengan normal.</p>
            </div>
          </div>
    
        </div>
    
      </div>
    </section><!-- End Services Section -->
    
    <!-- CSS tambahan untuk justify -->
    <style>
      .description {
        text-align: justify;
      }
    </style>
    


    @include('includes.landing.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  @include('includes.landing.javascript')

      <!-- WhatsApp Button -->
      <a href="https://wa.me/6281232648897" class="wa-button hidden" target="_blank">
        <img src="https://www.tanjunglesung.com/wp-content/uploads/2018/12/logo-wa-whatsapp-300x300.png" alt="WhatsApp Chat" />
      </a>

      <!-- WhatsApp Button CSS -->
      <style>

        .wa-button {
            position: fixed;
            bottom: 90px; /* Naikkan dari posisi default 20px menjadi 80px */
            right: 10px;
            z-index: 1000;
            width: 50px;
            height: 50px;
        }

        .wa-button img {
            width: 100%;
            height: 100%;
        }

      .wa-button.hidden {
        opacity: 0;
        pointer-events: none; /* Supaya tombol tidak bisa diklik saat disembunyikan */
      }
      </style>

      <script>
        // Fungsi untuk menunjukkan atau menyembunyikan tombol WhatsApp berdasarkan posisi scroll
        window.addEventListener('scroll', function() {
            var waButton = document.querySelector('.wa-button');
            
            // Jika scroll lebih dari 100px, tampilkan tombol
            if (window.scrollY > 100) {
                waButton.classList.remove('hidden');
            } else {
                // Jika scroll kurang dari 100px, sembunyikan tombol
                waButton.classList.add('hidden');
            }
        });
      </script>

</body>

</html>
