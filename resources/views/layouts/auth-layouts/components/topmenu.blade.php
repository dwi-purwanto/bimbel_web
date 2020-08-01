<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                        id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('../storage/app/images/'.Auth::user()->profile->foto)}}" alt="Profile Image" />{{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right"
                        aria-labelledby="navbarDropdown">
                        @if (Auth::user()->hasRole('admin'))
                            <a class="dropdown-item" href=" {{route('admin.edit.profile')}} "> {{ __('Profile') }} </a>
                        @else
                            <a class="dropdown-item" href="javascript:;"> {{ __('Profile') }} </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out pull-right"></i>
                         {{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
</div>
