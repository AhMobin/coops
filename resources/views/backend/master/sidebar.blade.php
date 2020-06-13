<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('home') }}" class="site_title">
                <img src="{{ url('storage/app/logos/logo.png') }}" alt="" style="width: 150px; height: 40px;">
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('public/backend/images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
{{--                <h3>General</h3>--}}
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Homepage <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('banner') }}">Banner</a></li>
                            <li><a href="{{ url('service') }}">Services</a></li>
                            <li><a href="{{ url('benefit') }}">Benefits</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('about') }}"><i class="fa fa-book"></i> About Page</a></li>

                    <li><a href="{{ url('story') }}"><i class="fa fa-history"></i> Story Page</a></li>

                    <li><a href="{{ url('dream') }}"><i class="fa fa-tasks"></i> Dream Page</a></li>

                    <li><a href="{{ url('goal') }}"><i class="fa fa-soccer-ball-o"></i> Goal Page</a></li>

                    <li><a href="{{ url('job') }}"><i class="fa fa-american-sign-language-interpreting"></i> Job In America Page</a></li>

                    <li><a href="{{ url('dancy') }}"><i class="fa fa-user"></i> James Dancy Page</a></li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
