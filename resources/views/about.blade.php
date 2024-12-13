<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="asset-lending-page/img/favicon.png" type="image/png">
    <title>About Me Portfolio</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Rahi Satner Portfolio - Senior WordPress Developer">
    <meta name="keywords" content="Portfolio, WordPress Developer, UI/UX, Web Design">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset-lending-page/css/bootstrap.css">
    <link rel="stylesheet" href="asset-lending-page/vendors/linericon/style.css">
    <link rel="stylesheet" href="asset-lending-page/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset-lending-page/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="asset-lending-page/css/magnific-popup.css">
    <link rel="stylesheet" href="asset-lending-page/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- main css -->
    <link href="asset-lending-page/css/style.css" rel="stylesheet">
      
    <link href="{{ asset('asset-lending-page/css/stylea.css') }}" rel="stylesheet" />
    
    <link href="{{ asset('asset-lending-page/css/styles.css') }}" rel="stylesheet" />
    <style>
          body {
          font-family: 'Arial', sans-serif;
          background-color: #f7f7f7;
          color: #333;
      }
        .home_banner_area {
          background-image: url(); /* Ganti dengan path gambar yang diinginkan */
          background-size: cover;
          background-position: center;
          padding-top: 50px; /* Jarak dari navbar */
          color: white; /* Atur warna teks agar terlihat kontras dengan gambar background */
      }
      .gradient-text {
          background: linear-gradient(to right, #6a1b9a, #1e88e5); /* Gradient dari ungu ke biru */
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }
      /* Responsiveness for mobile devices */
      @media (max-width: 768px) {
          .home_banner_area {
              padding-top: 20px; /* Kurangi padding untuk layar kecil */
          }
          .banner_content {
              text-align: center; /* Buat teks menjadi center */
          }
          .banner_content h1, 
          .banner_content .gradient-text {
              font-size: 1.5em; /* Atur ulang ukuran font */
          }
          .home_right_img img {
              width: 100%; /* Gambar memenuhi lebar layar */
              margin-bottom: 20px; /* Kurangi jarak bawah */
          }
          .d-flex.align-items-center {
              flex-direction: column; /* Tombol tersusun vertikal */
              gap: 10px; /* Tambahkan jarak antar tombol */

          }
        }
    

      section {
          padding: 60px 20px;
      }
      </style>


    <body>
        <!-- Navbar -->
        <x-navbar></x-navbar>
    <x-headerabout></x-headerabout>
        <!-- Header -->
        <header class="header_area" style="background-color: black;">
            <div class="main_menu">
                <!-- Navbar content here -->
            </div>
        </header>
     
        
        <section id="about" class="">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Foto di sebelah kiri -->
                    <div class="col-md-4 text-center mb-3">
                        <img src="asset-lending-page/img/asya.png" alt="Rasya's Photo" class="img-fluid rounded-circle">
                    </div>
                    <!-- Teks di sebelah kanan -->
                    @foreach ($about as $row)
                    <div class="col-md-8">
                        <h2 class="text-primary mb-3">About Me</h2>
                        <p class="lead text-muted">
                            {{ $row->title}}
                        </p>
                        <p>
                            {{ $row->description}}
                        </p>
                        <a href="contact" class="btn btn-primary mt-3"><i class="fas fa-envelope"></i> Contact Me</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>


       <!-- Footer -->
       <x-footer></x-footer>

       <!-- Scripts -->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
       
   </body>
   
   </html>