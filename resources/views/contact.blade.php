<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="asset-lending-page/img/favicon.png" type="asset-lending-page/image/png">
	<title>Contact Us</title>
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
	<link rel="stylesheet" href="asset-lending-page/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar></x-navbar>
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Contact Area =================-->
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


    <!--================Footer Area =================-->
    <x-footer></x-footer>
    <!--================End Footer Area =================-->
    
    <!-- Menampilkan SweetAlert jika ada pesan sukses -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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