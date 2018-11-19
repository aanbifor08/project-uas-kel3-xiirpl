<div class="sidebar-wrapper">
    <ul class="nav">

        @if (Route::has('admin'))
            <li class="{{ Request::is('admin') ? 'active' : null }} ">
                <a href="{{ route('admin') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>
                        {!! trans('admin.drawer-nav.dashboard') !!}
                    </p>
                </a>
            </li>
        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.writer'))
            @if (Route::has('admin.posts'))
                <li class="{{ (Request::routeIs('admin.posts') || Request::routeIs('posts.create') || Request::routeIs('editpost')) ? 'active' : null }} ">
                    <a href="{{ route('admin.posts') }}">
                        <i class="nc-icon nc-paper"></i>
                        <p>
                            {!! trans('admin.drawer-nav.posts') !!}
                        </p>
                    </a>
                </li>
            @endif
        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.admin'))
            @if (Route::has('showtags'))
                <li class="{{ (Request::routeIs('createtag') || Request::routeIs('showtags') || Request::routeIs('edittag')) ? 'active' : null }} ">
                    <a href="{{ route('showtags') }}">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                            {!! trans('admin.drawer-nav.tags') !!}
                        </p>
                    </a>
                </li>
            @endif
        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.moderator'))
            @if (Route::has('admin-uploads'))
                <li class="{{ Request::routeIs('admin-uploads') ? 'active' : null }} ">
                    <a href="{{ route('admin-uploads') }}">
                        <i class="nc-icon nc-album-2"></i>
                        <p>
                            {!! trans('admin.drawer-nav.file-manager') !!}
                        </p>
                    </a>
                </li>
            @endif

            @if (Route::has('sitemap-admin'))
                <li class="{{ Request::routeIs('sitemap-admin') ? 'active' : null }} ">
                    <a href="{{ route('sitemap-admin') }}">
                        <i class="nc-icon nc-map-big"></i>
                        <p>
                            <a href="#">Map</a>
                        </p>
                    </a>
                </li>
            @endif

            @if (Route::has('themes'))
                <li class="{{ Request::routeIs('themes') || Request::routeIs('edittheme') || Request::routeIs('showtheme') || Request::routeIs('createtheme') ? 'active' : null }} ">
                    <a href="{{ route('themes') }}">
                        <i class="nc-icon nc-palette"></i>
                        <p>
                            {!! trans('admin.drawer-nav.themes') !!}
                        </p>
                    </a>
                </li>
            @endif

        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.super.admin'))
            @if (Route::has('users'))
                <li class="{{ (Request::routeIs('users') || Request::routeIs('users.create') || Request::routeIs('users.show') || Request::routeIs('users.edit')) ? 'active' : null }} ">
                    <a href="{{ route('users') }}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            {!! trans('admin.drawer-nav.users') !!}
                        </p>
                    </a>
                </li>
            @endif

            @if (Route::has('admin/roles'))
                <li class="{{ Request::is('admin/roles') ? 'active' : null }} ">
                    <a href="{{ route('admin/roles') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>
                            {!! trans('admin.drawer-nav.roles') !!}
                        </p>
                    </a>
                </li>
            @endif


         

            @if (Route::has('admin/settings'))
                <li class="{{ Request::is('admin/settings') ? 'active' : null }} ">
                    <a href="{{ route('admin/settings') }}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            {!! trans('admin.drawer-nav.settings') !!}
                        </p>
                    </a>
                </li>
            @endif
        @endif

    </ul>
</div>
