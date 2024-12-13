<!-- resources/views/admin/certificates/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sertifikat</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<div class="container mt-5">
    <h1 class="h3 mb-4 text-gray-800">Detail Sertifikat</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Sertifikat</h6>
        </div>

        <div class="card-body">
            <p><strong>Nama Sertifikat:</strong> {{ $certificate->name }}</p>
            <p><strong>Dikeluarkan Oleh:</strong> {{ $certificate->issued_by }}</p>
            <p><strong>Tanggal Dikeluarkan:</strong> {{ $certificate->issued_at }}</p>
            <p><strong>Deskripsi:</strong> {{ $certificate->description }}</p>

            <h6 class="font-weight-bold text-primary mt-4">File Sertifikat</h6>
            @if($certificate->file)
                <a href="{{ asset('storage/' . $certificate->file) }}" target="_blank" class="btn btn-info btn-sm">
                    <i class="fas fa-file-pdf"></i> Lihat File
                </a>
            @else
                <p class="text-danger">File sertifikat tidak tersedia.</p>
            @endif
        </div>

        <div class="card-footer">
            <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Sertifikat
            </a>
        </div>
    </div>
</div>

<!-- JS Dependencies -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('asset-lending-page/js_admin/sb-admin-2.min.js') }}"></script>
</body>
</html>
