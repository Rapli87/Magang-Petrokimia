<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $data['title'] }} </title>
</head>
<body>

    <p>Hii {{ $data['name'] }}, Welcome to Refferal System!</p>
    <p><b>Email:-</b>{{ $data['email'] }}</p>
    <p><b>Password:-</b>{{ $data['password'] }}</p>
    <p>You Can add users your Network By share your <a href="{{ $data['url'] }}">Refferal Link</a></p>

    <p>Thank You!</p>
    
</body>
</html>