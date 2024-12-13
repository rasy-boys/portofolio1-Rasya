<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Certificate</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>
    <body id="page-top">

        <div class="container mt-5">
            <h1 class="h3 mb-4 text-gray-800">Edit Certificate</h1>
        
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Certificate Details</h6>
                </div>

    <div class="card-body">
    <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Certificate Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $certificate->name) }}" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="issued_by">Issued By</label>
            <input type="text" id="issued_by" name="issued_by" value="{{ old('issued_by', $certificate->issued_by) }}" required>
            @error('issued_by')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="issued_at">Issued Date</label>
            <input type="date" id="issued_at" name="issued_at" value="{{ old('issued_at', $certificate->issued_at) }}" required>
            @error('issued_at')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $certificate->description) }}</textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="file">Certificate File (PDF/JPG/PNG)</label>
            <input type="file" id="file" name="file">
            @error('file')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            @error('thumbnail')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        @if($certificate->file)
            <p>Current File: <a href="{{ asset('asset-lending-page/certificates/' . $certificate->file) }}" target="_blank">View File</a></p>
        @endif

        <button type="submit" class="btn btn-primary">Update Certificate</button>
    </form>

    <a href="{{ route('admin.certificates.index') }}">Back to Certificates List</a>

        </div>
    </div>
</div>


<!-- JS Dependencies -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
