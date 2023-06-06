<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Upload</h1>
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>
