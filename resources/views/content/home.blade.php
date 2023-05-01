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


                </p>
                <p>
                    <a class="vxod_vkabinet" href="{{route('postArticals')}}">Опубликовать свою работу</a>
                </p>
            </div>
            <h4 class="section-title">Все работы</h4>
           
            <div class="spiskigorodov">
                <div class="spisok">
                    <p class="change_city">
                        Выберете категорию
                    </p>
                    <a class="katalog" href="{{route('posts')}}">общее</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'механика')}}">механика</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'молекулярная физика')}}">молекулярная физика</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'электромагнетизм')}}">электромагнетизм</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'термодинамика')}}">термодинамика</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'квантовая механика')}}">квантовая механика</a>
                    <br>
                    <a class="katalog" href="{{route('katalog', 'оптика')}}">оптика</a>
                    <br>
                </div>

                <div class="obiyavlenya">
                    <h2>Новые работы</h2>
                    <div class="test">
                    

                        @foreach($data as $el)                    
                        
                        
                            <div class="obyavlenie"> 
                                <div class="dopinfa">
                                    @if($el->previu_img == '' )
                                    <img class="photo_news_post" src="{{asset('../storage/app/public/img'). '/'. 'nofoto.jpg'}}">
                                
                                    
                                    
                                    @else
                                    <img class="photo_news_post" src="{{asset('../storage/app/public/img'). '/'. $el->previu_img}}">

                                    @endif
                                    
                                    <a type="" href="{{ route('profil.profile', [$el->id_user])}}" class="goroda"> {{$el->fio}} </a>
                                </div>
                                <div class="osnovnya_infa">
                                    <h3 class="zagolovok">{{$el->artical_name}} </h3>
                                   
                                    <p class="opisanie_uslugu">
                                    {{$el->artical_description}}
                                    
                                    </p>
                                    
                                    <p style="color:darkmagenta; top:auto" class="cena_cena">категория: {{$el->colledj}}</p>
                                </div>
                                <div class="cena">
                                
                                    <div class="testa">
                                    
                                        <p class="cena_cena">{{$el->cost}}</p>
                                        
                                    </div>
                                    
                                    
                                    <a href="{{route('textID', $el->id)}}" class="btn-success">Просмотреть</a><br>
                                    
                                </div>
                                
                                <!-- <div id="text_block" class="testa">
                                   
                                </div> -->
   

                                
                            </div>
                            
    

                            
                           
                                @if(Auth::check())
                                    @if(Auth::user()->id == $el->id_user or Auth::user()->rol > 0)
                                    

                                    
                                    <td><a class="del" href="delete/{{ $el->id }}" >Delete</a></td>

                                @endif
                                    @endif
                                

                        @endforeach

                    </div>


                </div>
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