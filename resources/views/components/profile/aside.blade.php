<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('profile.start')}}" class="app-brand-link"><img src="https://cdn.memberkit.com.br/ll6iij8vi5piwhicvak1iwdjx78a?width=22&dpr=2" alt=""
                                                                         style="background-color: #f14733;padding: 5px 10px; border-radius: 9px; border: 1px solid crimson; margin-right: 5px;"></a><strong>Beer and Code</strong>
            <small>Teste Técnico | 03/<script>document.write(new Date().getFullYear());</script></small>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu</span>
        </li>

        <li class="menu-item">
            <a href="{{route('profile.start')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Start</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('profile.mydata.edit', auth()->user())}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-data"></i>
                <div data-i18n="Basic">My Data</div>
            </a>
        </li>

        @can('github_users')
            <li class="menu-item">
                <a href="{{route('profile.github.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-pin"></i>
                    <div data-i18n="Basic">Usuários do Github</div>
                </a>
            </li>
        @endcan

        @can('users')
            <li class="menu-item">
                <a href="{{route('profile.users.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-circle"></i>
                    <div data-i18n="Basic">Users</div>
                </a>
            </li>
        @endcan
        @can('profiles')
            <li class="menu-item">
                <a href="{{route('profile.profiles.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-id-card"></i>
                    <div data-i18n="Basic">Profiles</div>
                </a>
            </li>
        @endcan
        @can('permissions')
            <li class="menu-item">
                <a href="{{route('profile.permissions.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-key"></i>
                    <div data-i18n="Basic">Permissions</div>
                </a>
            </li>
        @endcan

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{__('Log Out')}}</span>
        </li>
        <li class="menu-item">
            <a href="javascript:;" class="menu-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                    class="menu-icon tf-icons bx bx-exit"></i> {{ __('Sair') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

    </ul>
</aside>
