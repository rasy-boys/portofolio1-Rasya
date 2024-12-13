<style>

#skills {
            background-color: ; /* Warna latar belakang cerah */
            padding: 60px 20px;
        }
    
        #skills .skill-item {
            background: #ffffff; /* Latar belakang putih untuk setiap skill */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            padding: 20px;
            margin: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    
        #skills .skill-item:hover {
            transform: translateY(-10px); /* Efek melayang saat hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih kuat saat hover */
        }
    
        #skills .skill-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            transition: transform 0.3s ease; /* Efek zoom pada ikon */
        }
    
        #skills .skill-item:hover .skill-icon {
            transform: scale(1.1); /* Zoom ikon saat hover */
        }
    
        #skills h4 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
        }
    
        #skills p {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.6;
        }
    
        /* Responsive Layout */
        @media (max-width: 768px) {
            #skills .skill-item {
                margin-bottom: 20px; /* Jarak antar elemen pada perangkat kecil */
            }
        }
    
</style>

<section id="skills" class="skills text-center">
    <div class="container">
        <h2 class="mb-5 text-primary">My Skills</h2>
        <div class="row justify-content-center">
        <!-- HTML-->
        <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
            <img src="asset-lending-page/img/html.png" alt="HTML" class="skill-icon">
            <h4>HTML</h4>
            <p>Mastering the basics of web development to create responsive and accessible designs.</p>
        </div>

        <!-- CSS -->
        <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
            <img src="asset-lending-page/img/css-3.png" alt="CSS" class="skill-icon">
            <h4>CSS</h4>
            <p>Mastering the basics of web development to create responsive and accessible designs.</p>
        </div>


        <!-- JavaScript -->
        <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
            <img src="asset-lending-page/img/js.png" alt="JavaScript" class="skill-icon">
            <h4>JavaScript</h4>
            <p>Building dynamic and interactive web experiences using modern frameworks.</p>
        </div>

        <!-- Laravel -->
        <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
            <img src="asset-lending-page/img/laravel.png" alt="Laravel" class="skill-icon">
            <h4>Laravel</h4>
            <p>Proficient in developing robust web applications with MVC architecture.</p>
        </div>

        <!-- Flutter -->
        <div class="col-lg-3 col-md-4 col-sm-6 skill-item">
            <img src="asset-lending-page/img/flutter.svg" alt="Flutter" class="skill-icon">
            <h4>Flutter</h4>
            <p>Creating cross-platform mobile apps with seamless user experiences.</p>
        </div>
    </div>
</section>
