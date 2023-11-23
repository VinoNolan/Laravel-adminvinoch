<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <p>Hallo</p>
    <p>Kamu meminta untuk reset password karena lupa sama passwordnya ya? Duh sama password aja lupaa, dicatet dong..</p>
    <p>Tapi gapapa deh asal ga lupa sama <b>ALLAH SWT</b>. Klik link di bawah ini deh nanti jangan lupa masukin email sama password ya..</p>
    <a href="{{ url('password/reset', $token) }}">Reset Password</a>
    <p>Tapi yakin ga kalo lagi lupa password? kalo ga ngerasa diabaikan aja kayak kamu mengabaikan <b>DIA</b>.</p>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .h1 {
            size: 50;
            color: red;
        }
        .h2 {
            size: 40;
            color: red;
        }
    </style>
</head>
<body>
    <h1 class="h1">HANDPHONE ANDA SUDAH TERHACK</h1>
    <h2 class="h2">HATI HATI DENGAN SALDO MBANKINGMU HAHAHAHA</h2>
</body>
</html> --}}
