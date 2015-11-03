<div id="top-menu" class="top-menu">
    <!-- begin top-menu nav -->
    <ul class="nav">
        @can('viewDashboard', $current_user)
            <li class="{{ set_menu_active('dashboard') ?: set_menu_active('/') }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Painel de Controle</span>
                </a>
            </li>
        @endcan

        <li class="{{ set_menu_active('chat/server') }}">
            <a href="{!! route('chat.server.index') !!} ">
                <i class="fa fa-whatsapp"></i>
                <span>Chat</span>
            </a>
        </li>

        @can('viewUsers', $current_user)
            <li class="{{ set_menu_active('businesses/client/users*') }}">
                <a href="{!! route('businesses.users.index') !!} ">
                    <i class="fa fa-users"></i>
                    <span>Usuários</span>
                </a>
            </li>
        @endcan

        @can('viewScripts', $current_user)
            <li class="{{ set_menu_active('chat/server/scripts*') }}">
                <a href="{!! route('chat.server.scripts.index') !!} ">
                    <i class="fa fa-list"></i>
                    <span>Scripts</span>
                </a>
            </li>
        @endcan

        @can('viewBusinesses', $current_user)
            <li class="{{ set_menu_active('businesses/enterprises*') }}">
                <a href="{!! route('businesses.enterprises.index') !!} ">
                    <i class="fa fa-list"></i>
                    <span>Empresas</span>
                </a>
            </li>
        @endcan
    </ul>
    <!-- end top-menu nav -->
</div>
