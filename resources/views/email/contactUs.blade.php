<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{

            color: blueviolet; 
        }
    </style>
</head>
<body text-black>
    <p><strong>Name:</strong> {{$contact['name']}} </p>
    <p><strong>E-mail:</strong> {{$contact['email']}} </p>
    <p><strong>Message:</strong> {{$contact['message']}} </p>
</body>
</html>