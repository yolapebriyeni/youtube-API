<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search YouTube</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 12px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 15px;
            margin: 10px 0;
            background-color: #f0f0f0;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        li:hover {
            background-color: #e0e0e0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }

        .error {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pencarian Video</h1>

        @if(isset($data['error']))
            <p class="error">{{ $data['error'] }}</p>
        @else
            <ul>
                @foreach($data['contents'] ?? [] as $item)
                    @if(isset($item['video']))
                        <li>
                            <a href="/videos/{{ $item['video']['videoId'] }}">
                                {{ $item['video']['title'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
