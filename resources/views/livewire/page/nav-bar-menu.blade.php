<div>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item {{Route::currentRouteName() == 'main' ? 'active' : ''}}">
            <a href="{{route('main')}}" class="nav-link text-light"><i class="fas fa-home"></i>  Home</a>
        </li>
        <li class="nav-item  {{Route::currentRouteName() == 'foods' ? 'active' : ''}}">
            <a href="{{route('foods')}}" class="nav-link text-light "><i class="fas fa-hamburger"></i> Foods</a>
        </li>
        <li class="nav-item  {{Route::currentRouteName() == 'drinks' ? 'active' : ''}}">
            <a href="{{route('drinks')}}" class="nav-link text-light"><i class="fas fa-beer"></i> Drinks</a>
        </li>

    </ul>
</div>
