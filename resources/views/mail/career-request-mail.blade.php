<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img  {width: 60px;
            height: 60px;
            position: absolute;
            right: 50px;
           }
        body {
            border: 2px solid black;
            border-radius: 20px;
            background-color: rgb(100, 155, 113);
            margin: 20px
        }
        h4{
            text-align: center
        }
        p{
            color:black;
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
   
    <img src="{{$message->embed(storage_path('app/public/asset/logo.png'))}}" alt="" style="width: 30px, height: 30px"> 

    <h1 style="border: black ">Abbiamo ricevuto una richiesta</h1>
    <h4 style="border: 2px solid black " >Richiesta per il ruolo di {{$info['role']}}</h4>
    <p style>Ricevuta da {{$info['email']}}</p>

    <h4 style="text-align: center">Messaggio:</h4>
    <p style="background-color: rgb(94, 189, 94)">{{$info['message']}}</p>

</body>
</html>