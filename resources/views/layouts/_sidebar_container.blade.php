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
                            <p> Devraj </p>
                            <a href="index.html#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                    Online</span></a>
                        </div>
                    </div>
                </li>

                {{-- Task management starts here --}}
                <li class="nav-item">
                    <a href="/" class="nav-link nav-toggle"> <i class="material-icons">event</i>
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
                    <a href="/" class="nav-link nav-toggle"> <i class="material-icons">person</i>
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





            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
