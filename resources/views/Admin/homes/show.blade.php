<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Details</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div class="container mt-5">
        <h1 class="h3 mb-4 text-gray-800">Home Details</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Details</h6>
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>Title:</strong> {{ $home->title }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $home->description }}</p>
                <p class="card-text"><strong>Image:</strong></p>
                @if ($home->image)
                    <img src="{{ asset('storage/' . $home->image) }}" width="200" class="img-thumbnail mb-3" alt="Home Image">
                @else
                    <p class="text-muted">No image available.</p>
                @endif
                
                <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary mt-3">Back to List</a>
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
