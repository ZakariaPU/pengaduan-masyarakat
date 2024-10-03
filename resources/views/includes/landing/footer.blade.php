<footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>KONTAK KAMI</h3>
      <p>Jalan Padjadjaran (Ringroad Utara) Condongcatur Depok Sleman Yogyakarta City, Indonesia Special Region of Yogyakarta</p>
      <p>Telp: (0274) 884444</p>
      <p>Email: example@gmail.com</p>
    </div>

    <div class="footer-section">
      <h3>MENU</h3>
      <ul>
        <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
        <li><a href="#about"><i class="fas fa-chevron-right"></i> About Me</a></li>
        <li><a href="#services"><i class="fas fa-chevron-right"></i> Mekanisme Pengaduan</a></li>
        <li><a href="{{ url('login')}}"><i class="fas fa-chevron-right"></i> Login</a></li>
        <li><a href="{{ url('register')}}"><i class="fas fa-chevron-right"></i> Register</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h3>SOSIAL MEDIA</h3>
      <p>Temukan kami di Sosial Media:</p>
      <div class="social-links">
        <a href="https://m.facebook.com/poldajogja/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/poldajogja?igsh=eXA4emhqdnV2djJi" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://x.com/PoldaJogja" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://youtube.com/@poldajogja?si=ZY6d-OFDliloRKTv" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.tiktok.com/@poldajogja" target="_blank"><i class="fab fa-tiktok"></i></a>
      </div>      
    </div>
    
  </div>
  <div class="footer-bottom">
    &copy; Copyright 2024 <b>Kepolisian Daerah Istimewa Yogyakarta </b>
  </div>
</footer>


<style>
 
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
}

.footer {
  background-color: #333;
  color: white;
  padding: 20px 0;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-section {
  flex: 1;
  margin: 10px;
  padding: 0 30px;   /* Memberikan padding horizontal untuk lebih rapi */
  margin-bottom: 30px;  /* Spasi seragam antar bagian */
}

.footer-section h3 {
  font-size: 18px;
  margin-bottom: 10px;
  font-weight: 700;  /* Bold */
}

.footer-section p, .footer-section ul, .footer-section .social-links {
  font-size: 14px;
}

.footer-section ul {
  list-style: none;
}

.footer-section ul li {
  margin-bottom: 5px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  display: flex;
  align-items: center;
}

.footer-section ul li a i {
  margin-right: 8px;  /* Jarak antara ikon dan teks */
}

.footer-section ul li a:hover {
  color: #ffb638  /* Efek hover untuk tampilan lebih interaktif */
}

.footer-section .social-links a {
  color: white;
  text-decoration: none;
}

.footer-section .social-links a {
  display: inline-block;
  margin-right: 10px;
  font-size: 14px;
}

.footer-section .social-links i {
  margin-right: 5px;
}

.footer-bottom {
  text-align: center;
  padding: 10px 0;
  font-size: 14px;
  background-color: #222;
}

.social-links a {
    font-size: 50px; /* Sesuaikan ukuran font sesuai kebutuhan */
    margin: 0 10px; /* Spasi antar ikon */
    color: #000; /* Ganti dengan warna yang diinginkan */
    transition: transform 0.2s; /* Efek transisi saat hover */
  }

  .social-links a:hover {
    transform: scale(1.7); /* Membesarkan ikon saat hover */
  }

@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
  }

  .footer-section {
    text-align: center;
    margin-bottom: 20px;
    padding: 0;  /* Hapus padding untuk layar kecil */
  }

  .footer-section ul li {
    display: inline;
    margin: 0 10px;
  }

  .footer-section .social-links a {
    margin: 0 5px;
  }

}

@media (max-width: 480px) {
  .footer-section p, .footer-section ul, .footer-section .social-links {
    font-size: 12px;
  }

  .footer-bottom {
    font-size: 12px;
  }
}

</style>