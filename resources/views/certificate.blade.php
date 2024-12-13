<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Portfolio - Certificates</title>

    <link href="{{ asset('asset-lending-page/css/stylec.css') }}" rel="stylesheet" />
  
</head>

<body>
    <x-navbar></x-navbar>
    <x-headercer></x-headercer>

    <section id="certificates" class="certificates text-center">
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

    <x-footer></x-footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
