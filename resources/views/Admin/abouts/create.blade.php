<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create About</title>
</head>
<body>
    <h1>Create About</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.abouts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" required><br><br>

        <label>Description:</label>
        <textarea name="description" required>{{ old('description') }}</textarea><br><br>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('admin.abouts.index') }}">Back to List</a>
</body>
</html>
