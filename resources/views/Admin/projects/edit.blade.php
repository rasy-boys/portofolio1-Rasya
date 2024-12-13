<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $project->name }}" required><br>

        <label>Description:</label>
        <textarea name="description" required>{{ $project->description }}</textarea><br>

        <label>Link:</label>
        <input type="url" name="link" value="{{ $project->link }}"><br>

        <label>Date:</label>
        <input type="date" name="date" value="{{ $project->date }}"><br>

        <label for="thumbnail">Thumbnail</label>
    <input type="file" name="thumbnail" class="form-control" accept="image/*">

        <button type="submit">Update</button>
    </form>
</body>
</html>
