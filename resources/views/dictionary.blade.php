<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form action="/dictionary" method="post">
    @csrf
    <p>English</p>
    <p>
        <input type="text" name="text">
    </p>
    <button type="submit">DICH</button>
</form>
<p>Vietnamese</p>
<p>
    {{$text}}
</p>
</body>
</html>
