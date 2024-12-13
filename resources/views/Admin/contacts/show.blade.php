<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
</head>
<body>
    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Social Media:</strong> {{ $contact->social_media }}</p>
    <a href="{{ route('admin.contacts.index') }}">Back</a>
</body>
</html>
