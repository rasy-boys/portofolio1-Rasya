<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Home</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<div class="container mt-5">
    <h1 class="h3 mb-4 text-gray-800">Create New Home</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Home Details</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.homes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">Back to Home List</a>
            </form>
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
