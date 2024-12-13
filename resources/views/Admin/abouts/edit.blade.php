<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
</head>
<body>
    <h1>Edit About</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title', $about->title) }}" required><br><br>

        <label>Description:</label>
        <textarea name="description" required>{{ old('description', $about->description) }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('admin.abouts.index') }}">Back to List</a>
</body>
</html>
