<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <link rel="preload" href="Ubuntu/Ubuntu-Bold.ttf">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/model.js"></script>
    <title>Profile</title>
</head>
<body style="background: #83ACC4">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <div class="wrapper">
        
        @include("layouts.head")
   
        <div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile">
        <img class="profile-bgHome" src="https://klike.net/uploads/posts/2023-02/1675243342_3-19.jpg" />
        
        <label>
        @foreach($data as $el)
        
        @if($el->my_img == '')

        <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
        @else
        <img class="avatar" src="{{asset('../storage/app/public/imgavatar'). '/'. $el->my_img}}" alt="jofpin"/>
        
        @endif
        @endforeach

        <form action="{{ route('profil.profiles', [Auth::user()->id])}}" novalidate method="post" enctype="multipart/form-data" id="upload-image">
        @csrf
        <input type="file" name="img_avatar" hidden>
    
</label>
           </div>
           
           @if(Auth::user()->id == $el->id)
           <button class="btn-success">сохранить</button><br>
           @endif
           </form>
          
          <div class="user-profile-data">
          @foreach($data as $el)
          @if(Auth::check())
          
          @if($el->rol == 0)
                                    

                                    
            <h1>{{$el->name}} {{$el->patronymic}}</h1>
            <p>Роль: Пользователь</p>
            <p>{{$el->email}}</p>

                  @endif
                  @if($el->rol > 0)
                  <h1>{{$el->name}} {{$el->patronymic}}</h1>
            <p style="color:red;">Роль: Admin</p>
            <p>{{$el->email}}</p>
                                @endif
                                    @endif
                                
                                    
                        
         
            
            
           
          </div> 
          <div class="description-profile">{{$el->about}}<a href="https://vk.com/kostya2006" title="bullgit"><strong></strong></a></div>
       <ul class="data-user">
        
        <li><a><strong>{{$el->exp}}</strong><span>Posts</span></a></li>
        <!-- <li><a><strong>718</strong><span>Followers</span></a></li>
        <li><a><strong>239</strong><span>Following</span></a></li> -->
       </ul>
       @endforeach
      </div>
    </div>

