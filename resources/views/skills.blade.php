<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="asset-lending-page/img/favicon.png" type="image/png">
    <title>My Skills Portfolio</title>
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
    
        <!-- Header -->
       <x-headerskil></x-headerskil>
     
       
    


        <section id="skills" class="skills text-center">
            <div class="container">
                <h2 class="mb-5 text-primary">My Skills</h2>
                <div class="row justify-content-center">
                    @foreach ($skills as $row)
                    <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
                        <img src="{{ asset('storage/' . $row->image) }}" alt="Skill Image" class="skill-icon">
                        <h4>{{ $row->title }}</h4>
                        <p>{{ $row->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
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