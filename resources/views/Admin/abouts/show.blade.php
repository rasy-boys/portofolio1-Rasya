<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show About</title>
</head>
<body>
    <h1>Show About</h1>

    <p><strong>Title:</strong> {{ $about->title }}</p>
    <p><strong>Description:</strong> {{ $about->description }}</p>

    <a href="{{ route('admin.abouts.index') }}">Back to List</a>
</body>
</html>
