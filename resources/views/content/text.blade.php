<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Физика.ru</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="js/model.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body style="background: #83ACC4;">
   
</body>

</html>

    @include("layouts.head")

    <div class="glavnya">

        <div class="glavny-block">
        
            <form action="{{route('search')}}" method="get" id="search-from">
            
            
                <div class="input-group mb-3">
                    <input
                        type="search"
                        id="form1"  
                        name="search"                    
                        class="form-control"
                        placeholder="Введите название работы"
                        aria-label="Введите название работы"
                        aria-describedby="button-addon2"
                    />
                    <button  type="submit" form="search-from"  class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                       Искать
                    </button>
                </div>

            </form>

            <div style="padding-bottom: 10px;">
                <h1>Физика.ru</h1>
                <p class="opisanie">
                Сайт физика – это не только место, где можно получить знания, но и площадка для общения и обмена опытом. Здесь вы сможете найти ответы на ваши вопросы, задать интересующие вас вопросы и принять участие в обсуждениях с другими любителями физики.


                
                <div class="obiyavlenya">
                    <h2>Работа</h2>
                    <div class="test">
                    

                        @foreach($data as $el)                    
                        
                        
                            <div class="obyavlenie"> 
                                <div class="dopinfa">
                                @if($el->previu_img == '' )
                                    <img class="photo_news_post" src="{{asset('../storage/app/public/img'). '/'. 'nofoto.jpg'}}">
                                
                                    
                                    <a href="" class="goroda"> {{$el->fio}} </a>
                                    @else
                                    <img class="photo_news_post" src="{{asset('../storage/app/public/img'). '/'. $el->previu_img}}">

                                    @endif
                                    
                                </div>
                                <div class="osnovnya_infa">
                                    <h3 class="zagolovok">{{$el->artical_name}} </h3>
                                   
                                    <p style="font-size: 24px" class="opisanie_uslugu">
                                    {{$el->artical_description}}
                                    </p>
                                    <p style="color:darkmagenta" class="cena_cena">{{$el->topic}}</p>
                                </div>
                                <div class="cena">
                                    <div class="testa">
                                        <p class="cena_cena">{{$el->cost}}</p>
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                                
                                <!-- <div id="text_block" class="testa">
                                   
                                </div> -->
   


                            </div>
    

                            
                           
                                @if(Auth::check())
                                    @if(Auth::user()->id == $el->id_user)
                                    

                                    
                                    <td><a href="delete/{{ $el->id }}" >Delete</a></td>

                                @endif
                                    @endif
                                

                        @endforeach

                    </div>

                    <h2>Ваш вопрос</h2>
                    <form action="{{route('postComent')}}" method="post">
					@csrf
                    <textarea class="form-control" name="message" placeholder="Вопросы, ответы, замечания" rows="5" cols="80" id="TITLE"></textarea>
                        <br>
                        <input type="hidden" name='post_id' value="{{ $el->id }}">
                        
                        <button class="btn-success">Отправить</button><br>


						
					</form>
                    
                </div>
                <br>
                <br>
                <h2>Коментарии</h2>
                @foreach($message as $rew)
                    
                    <div class="panel-body">
                        <h4>{{$rew->user_id}}</h4>
                        
                    <p>{{$rew->message}}</p>
                    

            </div>

                    @endforeach
            </div>



        </div>
     
        
   

    </div>


    </div>
                    
    </div>
            <!-- <div class="input-group poisk">
  <input type="search" class="form-control width-input" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary">Найти</button>
</div> -->



</body>

</html>