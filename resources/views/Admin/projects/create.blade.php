<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
</head>
<body>
    <h1>Create Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br>

        <label>Link:</label>
        <input type="url" name="link"><br>

        <label>Date:</label>
        <input type="date" name="date"><br>

        <label for="thumbnail">Thumbnail</label>
    <input type="file" name="thumbnail" class="form-control" accept="image/*">

        <button type="submit">Save</button>
    </form>
</body>
</html>
