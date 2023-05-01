<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preload" href="Ubuntu/Ubuntu-Bold.ttf">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/model.js"></script>
    <title>Document</title>
</head>
<body style="background: #83ACC4">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <div class="wrapper">
        
        @include("layouts.head")
    <div class="rew">
        <img src="../public/img/Group.png" alt="" class="enshtein">
    </div>
    <div class="block_text">
        <p class="text_look">Физика.ru</p>
        <p class="text_look2">Научная площадка для учеников и учителей</p>
        <br>
        <br>
        @auth('web')
    
        <a href="{{route('posts')}}" class="btn-go">Начать</a>
        
    @endauth
    @guest('web')
    <a href="{{route('register')}}" class="btn-go">Начать</a>
    @endguest
    </div>
</body>
</html>