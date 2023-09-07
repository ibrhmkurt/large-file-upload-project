<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File List</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>

        <th scope="col">title</th>
        <th scope="col">video</th>
    </tr>
    </thead>
    <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>
                <video controls style="width: 100px; height: auto;">
                    <source src="{{asset('storage/videos')}}/{{$movie['title']}}" type="video/mp4">
                </video>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
