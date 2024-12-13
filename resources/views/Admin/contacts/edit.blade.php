<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>
    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}">
        <br>
        <label>Social Media:</label>
        <input type="text" name="social_media" value="{{ $contact->social_media }}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
