<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <h1>Add Contact</h1>
    <form action="{{ route('admin.contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone">
        <br>
        <label>Social Media:</label>
        <input type="text" name="social_media">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
