<div id="top-menu" class="top-menu">
    <!-- begin top-menu nav -->
    <ul class="nav">
        <li class="{{ set_menu_active('dashboard') ?: set_menu_active('/') }}">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-laptop"></i>
                <span>Painel de Controle</span>
            </a>
        </li>

        <li class="{{ set_menu_active('chat/server') }}">
            <a href="{!! route('chat.server.index') !!} ">
                <i class="fa fa-whatsapp"></i>
                <span>Chat</span>
            </a>
        </li>

        <li class="{{ set_menu_active('businesses/users') }}">
            <a href="{!! route('businesses.users.index') !!} ">
                <i class="fa fa-users"></i>
                <span>Usuários</span>
            </a>
        </li>
    </ul>
    <!-- end top-menu nav -->
</div>
