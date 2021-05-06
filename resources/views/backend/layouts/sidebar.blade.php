<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="/"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="{{ route('quiz.create') }}"><i class="menu-icon icon-bullhorn"></i>Create Quiz </a>
                        </li>
                        <li><a href="{{ route('quiz.index') }}"><i class="menu-icon icon-inbox"></i>View Quiz <b class="label green pull-right">
                            11</b> </a></li>
                    </ul>
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{ route('question.create') }}"><i class="menu-icon icon-bullhorn"></i>Create Question </a>
                        </li>
                        <li><a href="{{ route('question.index') }}"><i class="menu-icon icon-inbox"></i>View Question <b class="label green pull-right">
                            17 new</b> </a></li>
                    </ul>
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{ route('user.create') }}"><i class="menu-icon icon-bullhorn"></i>Create User </a>
                        </li>
                        <li><a href="{{ route('user.index') }}"><i class="menu-icon icon-inbox"></i>View User<b class="label green pull-right">
                            17 new</b> </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    
                    
                    <ul class="widget widget-menu unstyled">
                        <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                        <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                        <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                    </ul>
                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                        </i>More Pages </a>
                            <ul id="togglePages" class="collapse unstyled">
                                <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                            </ul>
                        </li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="icon-inbox"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>