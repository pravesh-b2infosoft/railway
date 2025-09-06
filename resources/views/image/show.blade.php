<!DOCTYPE html>
<html>
<head>
    <title>View Image</title>
</head>
<body>
    <h1>Uploaded Image</h1>

    <img src="{{ asset('storage/images/' . $filename) }}" alt="Uploaded Image" style="max-width:500px;">
    <br><br>
    <a href="{{ route('image.create') }}">Upload Another</a>
</body>
</html>
