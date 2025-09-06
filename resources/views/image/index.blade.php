<!DOCTYPE html>
<html>
<head>
    <title>All Uploaded Images</title>
</head>
<body>
    <h1>All Uploaded Images</h1>

    @if(count($files) > 0)
        <div style="display:flex; flex-wrap: wrap; gap: 20px;">
            @foreach($files as $file)
                <div>
                    <img src="{{ asset('storage/' . $file) }}" alt="Image" style="max-width:200px;">
                </div>
            @endforeach
        </div>
    @else
        <p>No images uploaded yet.</p>
    @endif

    <br>
    <a href="{{ route('image.create') }}">Upload New Image</a>
</body>
</html>
