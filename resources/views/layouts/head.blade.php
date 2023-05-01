<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <div class="hedar_logo">
            <a href="{{route('index')}}" class="wrapper_logo-link">
                <img src="../public/img/rew.svg" alt="" class="img_logo">
            </a>
        </div>
      @if(Auth::check())
      <div class="usersi" style="float:left" >
        <!-- <a href="" style="text-decoration: none;" class="use-name js-open-modal">Пользователь:  {{Auth::user()->name}}</a> -->
        </div>
        

      @endif
      @auth('web')
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 size">
        
        <li><a href="{{route('index')}}" class="nav-link px-2 link-secondary ot">Главная</a></li>
        
        <li><a href="{{ route('profil.profile', [Auth::user()->id])}}" class="nav-link px-2 link-dark ot">Профиль</a></li>
        
        <li><a href="#" class="nav-link px-2 link-dark ot">Чат</a></li>
        <li><a href="{{route('info')}}" class="nav-link px-2 link-dark ot">О нас</a></li>
      </ul>
      @endauth
      @guest('web')
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 size">
        
        <li><a href="{{route('index')}}" class="nav-link px-2 link-secondary ot">Главная</a></li>
        
        <li><a href="#" class="nav-link px-2 link-dark ot">Профиль</a></li>
        
        <li><a href="#" class="nav-link px-2 link-dark ot">Чат</a></li>
        <li><a href="{{route('info')}}" class="nav-link px-2 link-dark ot">О нас</a></li>
      </ul>
      @endguest
      <div class="col-md-3 text-end">
        
    
    @auth('web')
    
    <button type="button" onclick="alerted();" class="btn btn-outline-primary me-2">Выйти</button>
        
    @endauth

@guest('web')
<button type="button" id="log" class="btn btn-outline-primary me-2">Войти</button>
<button type="button" id="reg" class="btn btn-primary">Регистрация</button>
@endguest



</div>