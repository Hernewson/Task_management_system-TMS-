{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection --}}
{{--
@extends('layouts/user')
@section('title')
<title>Task management | HomePage |</title>

@endsection --}}

{{-- @section('content')

<div class="page-container">

    <section>
        <div class="container">
            <div class="page-content-wrapper" style="margin-left:-120px;">

                <div class="page-content col-md-12">
                    <div class="row">
                        <!-- Main Section -->

                        <section>


                            <div class="main-content panel panel-default">
                                <header class="panel-heading clearfix">
                                    <a data-target="documentation/index.html" href="#"
                                        class="btn btn-default pull-right" rel="#overlay"><i
                                            class="fa fa-question-circle"></i></a>
                                    <h2 class="panel-title">
                                        Welcome to Streamlined!
                                    </h2>
                                </header>
                                <section class="panel-body container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-info text-center">
                                                <h4>Get started: <a href="#">Add contacts to your account</a></h4>
                                                <p>Vestibulum ultrices vehicula leo ac tristique. Mauris id nisl nibh.
                                                    Cras
                                                    egestas vestibulum nisl, nec eleifend nunc pulvinar non.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <hgroup class="col-md-12 text-center">
                                            <h2>Sed magna enim, tempus eu rutrum ornare.</h2>
                                            <h4>Donec suscipit fermentum turpis, a feugiat felis tincidunt eu</h4>
                                        </hgroup>
                                    </div>

                                    <div class="row">
                                        <figure class="col-md-4 text-center">
                                            <img src="images/asset1.jpg" width="100%" />
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet
                                                massa
                                                at
                                                lorem molestie egestas. Donec ipsum purus, consequat ac gravida sed,
                                                volutpat ut
                                                velit.</p>
                                        </figure>
                                        <figure class="col-md-4 text-center">
                                            <img src="images/asset2.jpg" width="100%" />
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet
                                                massa
                                                at
                                                lorem molestie egestas. Donec ipsum purus, consequat ac gravida sed,
                                                volutpat ut
                                                velit.</p>
                                        </figure>
                                        <figure class="col-md-4 text-center">
                                            <img src="images/asset3.jpg" width="100%" />
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet
                                                massa
                                                at
                                                lorem molestie egestas. Donec ipsum purus, consequat ac gravida sed,
                                                volutpat ut
                                                velit.</p>
                                        </figure>
                                    </div>

                                    <div class="other-options">
                                        <h3 class="other">Other things to do...</h3>
                                        <ul>
                                            <li>
                                                <h4><a href="#">Lorem Ipsum Dolor Sit Amet</a></h4>
                                                <p>Nam sit amet massa at lorem molestie egestas.</p>
                                            </li>
                                            <li>
                                                <h4><a href="#">Lorem Ipsum Dolor Sit Amet</a></h4>
                                                <p>Nam sit amet massa at lorem molestie egestas.</p>
                                            </li>
                                            <li>
                                                <h4><a href="#">Lorem Ipsum Dolor Sit Amet</a></h4>
                                                <p>Nam sit amet massa at lorem molestie egestas.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>


                        </section>

                        <!-- Main Section End -->
                    </div>
                </div>
            </div>
        </div>
        {{-- <div id="push"></div> --}}
{{-- </section>
</div>
@endsection --}}

@if (Auth::user()->isAdmin())

@extends('vendor/main')
@section('title')
<title>GCN Green Computing Nepal |Dashboard | </title>
@endsection

@section('content')
<!-- start page container -->
<div class="page-container">
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /admin ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-green">
                            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Clients</span>
                                <span class="info-box-number">450</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 45%"></div>
                                </div>
                                <span class="progress-description">
                                    45% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-yellow">
                            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Users</span>
                                <span class="info-box-number">155</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <span class="progress-description">
                                    40% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-blue">
                            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Active Users</span>
                                <span class="info-box-number">52</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                                <span class="progress-description">
                                    85% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-pink">
                            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Projects</span>
                                <span class="info-box-number">13,921</span><span>$</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                <span class="progress-description">
                                    50% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- end widget -->






        </div>
    </div>
</div>


</div>
</div>
<!-- end page content -->

</div>
<!-- end page container -->
@endsection

@else

@section('content')

<div class="page-container">

    <section>
        <div class="container">
            <div class="page-content-wrapper" style="margin-left:-120px;">

                <div class="page-content col-md-12">
                    <div class="row">
                        <!-- Main Section -->
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Todo List</header>
                                    <button id="panel-button"
                                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="panel-button">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here</li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <ul class="to-do-list ui-sortable" id="sortable-todo">
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check1">
                                                <label for="todo-check1"></label>
                                            </div>
                                            <p class="todo-title">Add fees details in system
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="index.html#" class="todo-remove"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check2">
                                                <label for="todo-check2"></label>
                                            </div>
                                            <p class="todo-title">Announcement for holiday
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="index.html#" class="todo-remove"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check3">
                                                <label for="todo-check3"></label>
                                            </div>
                                            <p class="todo-title">call bus driver</p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="index.html#" class="todo-remove"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check4">
                                                <label for="todo-check4"></label>
                                            </div>
                                            <p class="todo-title">School picnic</p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="index.html#" class="todo-remove"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="todo-check pull-left">
                                                <input type="checkbox" value="None" id="todo-check5">
                                                <label for="todo-check5"></label>
                                            </div>
                                            <p class="todo-title">Exam time table generate
                                            </p>
                                            <div class="todo-actionlist pull-right clearfix">
                                                <a href="index.html#" class="todo-remove"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- Activity feed start -->
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Activity Feed</header>
                                    <button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="feedMenu">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here</li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <ul class="feedBody">
                                        <li class="active-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std1.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
                                                    class="text-muted">6 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                hii John, I have upload doc related to task.
                                            </p>
                                        </li>
                                        <li class="diactive-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std2.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
                                                    class="text-muted">5 hours
                                                    ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                Please do as specify. Let me know if you have any query.
                                            </p>
                                        </li>
                                        <li class="diactive-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std3.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblCommentStyle">comment</span> Lina
                                                Smith<small class="text-muted">6 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                Hey, How are you??
                                            </p>
                                        </li>
                                        <li class="active-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std4.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan
                                                <small class="text-muted">7 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                I am fine. You??
                                            </p>
                                        </li>
                                        <li class="active-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std5.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small
                                                    class="text-muted">6 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                hii John, I have upload doc related to task.
                                            </p>
                                        </li>
                                        <li class="diactive-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std6.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small
                                                    class="text-muted">5 hours
                                                    ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                Please do as specify. Let me know if you have any query.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Activity feed end -->
                        <!-- Main Section End -->
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </section>
</div>
@endsection

@endif
