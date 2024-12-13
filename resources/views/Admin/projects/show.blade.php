<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
</head>
<body>
    <h1>Project Details</h1>

    <p><strong>Name:</strong> {{ $project->name }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Link:</strong> 
        @if($project->link)
            <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
        @else
            <em>No link provided</em>
        @endif
    </p>
    <p><strong>Date:</strong> {{ $project->date }}</p>

    <a href="{{ route('admin.projects.index') }}">Back to Projects</a>
</body>
</html>
