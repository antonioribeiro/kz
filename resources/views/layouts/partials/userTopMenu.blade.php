@include('layouts.partials.businessSelector')

<li class="dropdown navbar-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ $current_user->present()->avatar }}" alt="" />
        <span class="hidden-xs user-name">
            {{ $current_user->present()->fullName }}

            <span class="user-position">{{ $current_user->businessRole->description }}</span>
        </span> <b class="caret"></b>
    </a>
    <ul class="dropdown-menu animated bounceIn">
        <li class="arrow"></li>
        <li><a href="{{ route('password') }}">Trocar Senha</a></li>
        <li><a href="{{ route('auth.logout') }}">Sair</a></li>
    </ul>
</li>
