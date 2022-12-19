<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span data-i18n="nav.category.forms">MENÚ</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                    data-placement="right" data-original-title="Forms"></i>
            </li>
            <li class=" nav-item"><a href="{{ route('home') }}"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="nav.support_raise_support.main">Home</span></a>
            </li>
            @if(Auth::user()->isAdmin())
            <li class=" nav-item"><a href="{{ url('users') }}"><i class="la la-user"></i><span class="menu-title"
                        data-i18n="nav.support_raise_support.main">Users</span></a>
            </li>
            @endif

            <li class=" nav-item"><a href="{{ url('tasks') }}"><i class="la la-user"></i><span class="menu-title"
                        data-i18n="nav.support_raise_support.main">Task</span></a>
            </li>
        </ul>
    </div>
</div>
