<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo" style="background: #000;">
            <a href="/home">
                <img src="http://task.gcn.com.np/images/flarepoint_logo.png" alt=""
                    style="height: 48px; width: 100%; object-fit: contain;">
            </a>
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>
        <form class="search-form-opened" action="#" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>
        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
            data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                <!-- start language menu -->
                <li class="dropdown language-switch">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img
                            src="../assets/img/flags/gb.png" class="position-left" alt=""> English
                        <!-- <span
                            class="fa fa-angle-down"></span> -->
                    </a>
                    <!--  <ul class="dropdown-menu">
                        <li>
                            <a class="deutsch"><img src="../assets/img/flags/de.png" alt=""> Deutsch</a>
                        </li>
                        <li>
                            <a class="ukrainian"><img src="../assets/img/flags/ua.png" alt=""> Українська</a>
                        </li>
                        <li>
                            <a class="english"><img src="../assets/img/flags/gb.png" alt=""> English</a>
                        </li>
                        <li>
                            <a class="espana"><img src="../assets/img/flags/es.png" alt=""> España</a>
                        </li>
                        <li>
                            <a class="russian"><img src="../assets/img/flags/ru.png" alt=""> Русский</a>
                        </li>
                    </ul> -->
                </li>
                <!-- end language menu -->
                <!-- start notification dropdown -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge headerBadgeColor1"> 6 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Notifications</span></h3>
                            <span class="notification-label purple-bgcolor">New 6</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
                                            <span class="notification-icon circle deepPink-bgcolor"><i
                                                    class="fa fa-check"></i></span>
                                            Congratulations!. </span>
                                    </a>
                                </li>
                                <li>

                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 hrs</span>
                                        <span class="details">
                                            <span class="notification-icon circle red"><i
                                                    class="fa fa-times"></i></span> Application error. </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="javascript:void(0)"> All notifications </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end notification dropdown -->
                <!-- start message dropdown -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge headerBadgeColor2"> 2 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Messages</span></h3>
                            <span class="notification-label cyan-bgcolor">New 2</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="index.html#">
                                        <span class="photo">
                                            <img src="../assets/img/prof/prof2.jpg" class="img-circle" alt="">
                                        </span>
                                        <span class="subject">
                                            <span class="from"> Sarah Smith </span>
                                            <span class="time">Just Now </span>
                                        </span>
                                        <span class="message"> Jatin I found you on LinkedIn... </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="index.html#"> All Messages </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end message dropdown -->
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        {{-- <img alt="" class="img-circle " src=" storage/{{$user->image}} " /> --}}
                        <img src="storage/{{Auth::user()->image}}" alt="" class="img-circle " style="height: 25px;
                        width: 25px;
                        object-fit: cover;">

                        <span class="username username-hide-on-mobile"> <b>{{Auth::user()->name}}</b> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{route('viewProfile')}}">
                                <i class="icon-user"></i> Profile </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="icon-settings"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="icon-directions"></i> Help
                            </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="lock_screen.html">
                                <i class="icon-lock"></i> Lock
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end header -->
