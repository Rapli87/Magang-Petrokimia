<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $data['title'] }} </title>
</head>
<body>

    <p>Hii {{ $data['name'] }}, Welcome to PGFC System!</p>
    <p><b>Email:-</b>{{ $data['email'] }}</p>
    <p><b>Password:-</b>{{ $data['password'] }}</p>
    <p><b>Kode Token:-</b>{{$data['referral_code']}}</p>
    <p>Daftarkan Pemain Futsal Anda Di Link <a href="{{ $data['url'] }}">Daftar Disini</a></p>

    <p>Thank You!  <p>Hii {{ $data['name'] }}</p></p>
    
</body>
</html>