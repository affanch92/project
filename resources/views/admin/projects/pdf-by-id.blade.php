<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PDF</title>
</head>

<body>
    <center>
        <h2 style="text-align: center;">Detail Project</h2>
        <img src="{{ public_path('bootstrap-5.3.8-dist/images/' . $projects->image) }}" alt="{{ $projects->title }}"
            width="200">
        <h3>{{ $projects->title }}</h3>
        <p>{{ $projects->description }}</p>
        <p><strong>Teknologi:</strong> {{ $projects->teknologi }}</p>
        <p><strong>Status:</strong> {{ $projects->status }}</p>
    </center>
</body>

</html>
