<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
    @if(Auth::user()->role->role_name == 'admin')
            @include('includes.menu_admin')
        @else
            @include('includes.menu_merchant')
    @endif
</div>
