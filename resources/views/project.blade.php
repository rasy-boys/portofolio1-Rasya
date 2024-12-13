<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Rasya Portfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="asset-lending-page/css/style.css">

    <link href="{{ asset('asset-lending-page/css/stylep.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <style>
        /* Global Body Style */
        .project-info img {
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

        /* Footer */
        x-footer {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <x-navbar></x-navbar>
    
    <x-headpr></x-headpr>

    <!-- Main Content -->
    <main>
        <section id="project">
            <div class="container">
                <div class="row">
                    @foreach ($project as $row)
                        <div class="col-lg-6 col-md-6 col-sm-12 project-info">
                            <!-- Project Image -->
                   
                            
                            <!-- Project Info -->
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
        
    </main>

    <!-- Footer -->
    <x-footer></x-footer>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
