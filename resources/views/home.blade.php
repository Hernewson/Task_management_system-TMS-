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

@extends('layouts/user')
@section('title')
<title>Task management | HomePage |</title>

@endsection

@section('content')

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
    </section>
</div>
@endsection
