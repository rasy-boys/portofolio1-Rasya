<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="asset-lending-page/img/favicon.png" type="image/png">
    <title>Rasya Portfolio</title>
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
    
    <link href="{{ asset('asset-lending-page/css/stylec.css') }}" rel="stylesheet" />

    
    <link href="{{ asset('asset-lending-page/css/stylep.css') }}" rel="stylesheet" />

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
          body {
          font-family: 'Arial', sans-serif;
          
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

      .project-info img {
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

      </style>


    <body>
        <!-- Navbar -->
        <x-navbar></x-navbar>
    
        <!-- Header -->
        <header class="header_area" style="background-color: black;">
            <div class="main_menu">
                <!-- Navbar content here -->
            </div>
        </header>
     
        <section class="home_banner_area">
           
                @foreach ($homes as $row )
                    
               
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner_content">
                                <span class="text-uppercase gradient-text" style="font-size: 2em; font-weight: bold;">
                                    {{ $row->title }}
                                </span>
                                <h1 class="text-uppercase gradient-text">
                                {{ $row->description }}
                                </h1>
                                <div class="d-flex align-items-center justify-content-left flex-wrap">
                                    <a class="primary_btn" href="#"><span>Hire Me</span></a>
                                    <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="home_right_img text-center">
                                <img src="{{ asset('storage/' . $row->image) }}"alt="Image">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </section>
        
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


        <section id="skills" class="skills text-center">
            <div class="container">
                <h2 class="mb-5 text-primary">My Skills</h2>
                <div class="row justify-content-center">
                    @foreach ($skill as $row)
                    <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
                        <img src="{{ asset('storage/' . $row->image) }}" alt="Skill Image" class="skill-icon">
                        <h4>{{ $row->title }}</h4>
                        <p>{{ $row->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        
    <section id="" class="certificates text-center">
        <h2>My Certificates</h2>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Certificate Items -->
                @foreach ($certificate->chunk(2) as $chunk)
                    <div class="row">
                        @foreach ($chunk as $row)
                            <div class="col-lg-6 col-md-6 col-sm-12 certificate-item mb-4">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <h4 class="certificate-name">{{ $row->name }}</h4>
                                        <!-- Certificate Image -->
                                        <img src="{{ asset('storage/' . $row->thumbnail) }}" alt="{{ $row->name }}" class="certificate-thumbnail">
                                        <div class="certificate-details">
                                            <p class="issued-by">
                                                <i class="fas fa-user-tie"></i> <strong>Issued By:</strong> <span>{{ $row->issued_by }}</span>
                                            </p>
                                            <p class="issued-at">
                                                <i class="fas fa-calendar-alt"></i> <strong>Issued At:</strong> <span>{{ $row->issued_at }}</span>
                                            </p>
                                            <p class="certificate-description">
                                                <i class="fas fa-info-circle"></i> <strong>Description:</strong> <span>{{ $row->description }}</span>
                                            </p>
                                            <a href="{{ asset('storage/' . $row->file) }}" class="certificate-file btn btn-primary btn-sm" target="_blank">
                                                <i class="fas fa-file-pdf"></i> View Certificate
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="project">
        
        <div class="container">
          
                <h2 class="mb-5 text-primary">My Project</h2>
                <div class="row justify-content-center">
                @foreach ($project as $row)
                    <div class="col-lg-6 col-md-6 col-sm-12 project-info">
                        <h3>{{ $row->name }}</h3>
                        <img src="{{ asset('thumbnails/' . $row->thumbnail) }}" alt="Thumbnail" style="width: 100px; height: auto;">
                        <p>{{ $row->description }}</p>
                        <p class="project-date">
                            <i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($row->date)->format('d M Y') }}
                        </p>
                        <a href="{{ $row->link }}" target="_blank" class="btn btn-primary mt-2">
                            <i class="fas fa-external-link-alt"></i> Visit Project
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact_area section_gap">
    
        <div class="container">
            
            <h2 class="mb-5 text-primary text-center">Contact Me</h2>
            <div class="row justify-content-center">
               
                <!-- Contact Info -->
                <div class="col-lg-4 mb-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home" style="font-size: 20px; color: #6c757d;"></i> <!-- Ukuran font diubah -->
                            <h6 style="font-size: 1.1em;">{{ $contact->name }}</h6> <!-- Menampilkan nama dari data yang diambil -->

                            <p>Santa Monica Boulevard</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset" style="font-size: 20px; color: #6c757d;"></i> <!-- Ukuran font diubah -->
                            <h6><a href="tel:+04409865562" style="color: #17a2b8;">{{ $contact->phone }}</a></h6>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope" style="font-size: 20px; color: #6c757d;"></i> <!-- Ukuran font diubah -->
                            <h6><a href="mailto:support@colorlib.com" style="color: #17a2b8;">{{ $contact->email }}</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <form class="row contact_form" action="{{ route('admin.contacts.store') }}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control" name="social_media" id="message" rows="5" placeholder="Enter Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="primary_btn" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Message Sent!',
            text: '{{ session('success') }}',
            showConfirmButton: true,
            confirmButtonColor: '#007bff',
        });
    </script>
    @endif


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