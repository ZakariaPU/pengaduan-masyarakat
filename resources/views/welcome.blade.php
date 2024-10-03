<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="position: relative; overflow: hidden;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; z-index: 2;">
        <div class="text-center">
          <h1 class="shadow-text" data-aos="fade-up">Sistem Informasi Pengaduan Layanan Internet & Telepon</h1>
          {{-- <h2 class="slogan" data-aos="fade-up" data-aos-delay="200">Slogan: <span class="highlight">Mengabdi dengan Integrasi - Melayani dengan Teknologi</span></h2> --}}
          <h2 class="shadow-text" data-aos="fade-up" data-aos-delay="400">Kami siap membantu! Laporkan masalah Anda di sini untuk penyelesaian yang cepat dan aman.</h2>
            <div data-aos="fade-up" data-aos-delay="800">
                <a href="{{ url('login')}}" class="btn-get-started scrollto">Pengaduan</a>
                <a href="#services" class="btn-get-started-2 scrollto">Mekanisme</a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<style>
    /* Carousel Background */
    #hero {
        position: relative;
        height: 100vh;
        width: 100%;
        background-size: cover;
        background-position: center;
        animation: carousel 18s infinite ease-in-out;
    }

    /* Animasi carousel background */
    @keyframes carousel {
        0% {
            background-image: url('assets/img/lap_polda.png');
            background-size: 110%;
        }
        33% {
            background-image: url('assets/img/apel_polda.jpg');
            background-size: 110%;
        }
        66% {
            background-image: url('assets/img/upc_polda.jpg');
            background-size: 110%;
        }
        100% {
            background-image: url('assets/img/tik_polda.jpeg');
            background-size: 110%;
        }
    }

    /* Smooth transition untuk perubahan background */
    #hero {
        transition: background-image 1s ease-in-out;
    }

    /* Overlay agar tulisan lebih jelas */
    #hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Membuat lapisan gelap */
        z-index: 1;
    }
    .shadow-text {
        font-size: 2.5rem; /* Ukuran font untuk h1 */
        color: #ffffff; /* Warna teks */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Bayangan hitam */
        animation: fadeIn 1.5s forwards; /* Animasi timbul */
        opacity: 0; /* Awal tidak terlihat */
    }

    .slogan {
        font-size: 2rem; /* Ukuran font untuk slogan */
        color: #ffe600; /* Warna kuning cerah untuk teks slogan */
        font-weight: bold; /* Teks tebal untuk penekanan */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Bayangan lebih lembut untuk slogan */
        animation: fadeIn 1.5s forwards; /* Animasi timbul */
        opacity: 0; /* Awal tidak terlihat */
        margin: 20px 0; /* Jarak atas dan bawah */
    }

    .highlight {
        font-style: italic; /* Miringkan teks yang di-highlight */
        text-decoration: underline; /* Garis bawah pada teks yang di-highlight */
    }

    @keyframes fadeIn {
        to {
            opacity: 1; /* Akhir terlihat */
        }
    }
</style>


<main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h3><b>About SIGAPNET</b></h3>
          </div>
  
          <div class="row content">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                  <h3>Platform</h3>
                  <p>
                      Adalah platform digital yang dirancang untuk memfasilitasi jajaran POLDA dalam menyampaikan keluhan terkait gangguan layanan internet dan telepon. Sistem ini mempermudah proses pelaporan, pemantauan, dan penyelesaian gangguan melalui alur yang terintegrasi antara pengguna, penyedia layanan, dan pihak terkait lainnya.
                  </p>
                  <h3>Tujuan</h3>
                  <ul>
                      <li><i class="fas fa-chevron-right"></i> Memfasilitasi pengguna untuk melaporkan gangguan layanan internet dan telepon dengan cepat dan efisien melalui platform online yang mudah diakses.</li>
                      <li><i class="fas fa-chevron-right"></i> Meningkatkan efisiensi penyedia layanan dalam menangani keluhan, dengan sistem yang secara otomatis mengarahkan laporan kepada tim terkait dan memantau perkembangan penanganan.</li>
                  </ul>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <h3>Komitmen</h3>
                  <p>
                      Memberikan pelayanan terbaik dan transparan dalam menangani setiap keluhan jajaran POLDA. Kami percaya bahwa kepercayaan pengguna terhadap layanan internet dan telepon sangat penting, dan SIGAPNET hadir untuk memastikan bahwa setiap gangguan dapat segera teratasi dengan cepat dan tepat.
                  </p>
                  <a href="#services" class="btn-learn-more">Mekanisme Pengaduan</a>
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
  
<!-- Include the required CSS styles -->
<style>
  /* Efek hover pada kartu */
  .card:hover {
      background-color: #e0f7fa; /* Ganti warna background menjadi lebih terang ketika hover */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Tambahkan bayangan lebih tebal pada hover *
      transform: translateY(-8px); /* Mengangkat kartu lebih tinggi saat hover */
      transition: all 0.4s ease-in-out; /* Animasi halus dengan durasi yang lebih panjang */
  }
  
  /* Mengatur ikon dan teks untuk juga mendapatkan efek animasi halus */
  .card i, .card span, .card p {
      transition: color 0.4s ease-in-out; /* Animasi halus perubahan warna */
  }
  
  /* Mengubah warna ikon dan teks saat hover */
  .card:hover i {
      color: #0097a7; /* Ganti warna ikon pada hover */
  }
  
  .card:hover span {
      color: #0097a7; /* Ganti warna angka pada hover */
  }
  
  .card:hover p {
      color: #555; /* Ganti warna teks pada hover */
  }
  
  /* Style untuk judul utama */
  #counts .content .section-title {
      font-size: 32px;
      font-weight: bold;
      color: #333;
      margin-bottom: 40px;
  }
  
  #counts .card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan ringan untuk kartu */
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }
  
  #counts .card .icon {
      color: #0097a7; /* Warna dasar ikon */
  }
  </style>
  
  <!-- ======= Counts Section (Modified) ======= -->
  <section id="counts" class="counts py-5">
    <div class="container">
      <div class="section-title text-center" data-aos="fade-up">
        <h3><b>Statistik Pengaduan SIGAPNET</b></h3>
        <p>Data Pengunjung, Pengaduan, dan Laporan yang Ditangani</p>
      </div>
  
      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
          <div class="card flex-fill" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="bi bi-people icon me-3" style="font-size: 2.5rem;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="{{ $visitorCount }}" data-purecounter-duration="1" class="purecounter" style="font-size: 2.5rem; font-weight: bold;"></span>
                  <p class="mb-0"><strong>Pengunjung</strong></p>
                  <p class="mb-0">Total Pengunjung Platform SIGAPNET</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
          <div class="card flex-fill" data-aos="fade-up" data-aos-delay="200">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="bi bi-exclamation-circle icon me-3" style="font-size: 2.5rem;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter" style="font-size: 2.5rem; font-weight: bold;"></span>
                  <p class="mb-0"><strong>Pengaduan</strong></p>
                  <p class="mb-0">Jumlah Pengaduan yang Diterima</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
          <div class="card flex-fill" data-aos="fade-up" data-aos-delay="300">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="bi bi-check-circle icon me-3" style="font-size: 2.5rem;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="180" data-purecounter-duration="1" class="purecounter" style="font-size: 2.5rem; font-weight: bold;"></span>
                  <p class="mb-0"><strong>Selesai</strong></p>
                  <p class="mb-0">Pengaduan yang Ditangani</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Counts Section -->
  
  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h3><b>Mekanisme Pengaduan SIGAPNET</b></h3>
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
        <i class="fab fa-whatsapp"></i> <!-- Ikon Font Awesome -->
      </a>
      

      <!-- WhatsApp Button CSS -->
      <style>
        .wa-button {
            font-size: 40px;  /* Atur ukuran ikon */
            position: fixed;
            bottom: 90px; /* Naikkan dari posisi default 20px menjadi 80px */
            right: 3px;
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
