<!DOCTYPE html>
<html>
<head>
    <title>Detail Video</title>
</head>
<body>
    <h1>Detail Video</h1>

    @if(isset($data['error']))
        <p style="color:red;">{{ $data['error'] }}</p>
    @else
        <h2>{{ $data['title'] ?? 'Tanpa Judul' }}</h2>
        <p><strong>Deskripsi:</strong> {{ $data['description'] ?? '-' }}</p>
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/{{ $data['videoId'] ?? '' }}"
            frameborder="0" allowfullscreen></iframe>
    @endif
</body>
</html>
