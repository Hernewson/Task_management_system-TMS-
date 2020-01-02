<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>


                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('assets/img/dp.jpg') }}" class="img-circle user-img-circle"
                                alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> <b> {{ Auth::user()->name }} </b></p>
                            <a href="index.html#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                    Online</span></a>
                        </div>
                    </div>
                </li>

                @if (auth()->user()->isAdmin())
                <li class="nav-item start">
                    <a href="/home" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        {{-- <span class="arrow open"></span> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                            <li class="nav-item active">
                                <a href="dashboard1.html" class="nav-link nav-toggle">
                                    <span class="title">Dashboard 1</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="dashboard2.html" class="nav-link ">
                                    <span class="title">Dashboard 2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard3.html" class="nav-link ">
                                    <span class="title">Dashboard 3</span>
                                </a>
                            </li>
                        </ul> --}}
                </li>

                @endif
                {{-- Task management starts here --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link nav-toggle"> <i class="material-icons">event</i>
                        <span class="title">Tasks </span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="/todos" class="nav-link nav-toggle">
                                <span class="title">All tasks</span>
                                {{-- <span class="selected"></span> --}}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="/new-todos" class="nav-link ">
                                <span class="title">Create task
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/completed" class="nav-link ">
                                <span class="title">Completed Tasks</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Task management ends here --}}

                {{-- Clients management starts here --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                        <span class="title">Clients</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="/clients" class="nav-link "> <span class="title">All
                                    Clients</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/clients/create" class="nav-link "> <span class="title">Add
                                    Client</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Trashed_client.html" class="nav-link "> <span class="title">Trashed
                                    Client</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Clients management ends here --}}


                @if (auth()->user()->isAdmin())
                {{-- Users management starts here --}}
                <li class="nav-item">
                    <a href="/home" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                        <span class="title">Users</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="/view-users" class="nav-link "> <span class="title">All
                                    Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-user" class="nav-link "> <span class="title">Add
                                    User</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link "> <span class="title">Trashed
                                    Users</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Users management ends here --}}
                @endif


            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
