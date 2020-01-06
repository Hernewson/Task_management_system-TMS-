@extends('vendor/main')
@section('title')
<title>{{Auth::user()->name}}|Profile| </title>
@endsection
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-content">

            <div class="card-body ">

                <div class="container">

                    <div class="row my-2">
                        <div class=" col-lg-8 order-lg-2" style="margin-left:50px">
                            {{-- session message starts --}}
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                            @endif
                            @if (session()->has('complete'))
                            <div class="alert alert-success">
                                {{session()->get('complete')}}
                            </div>
                            @endif

                            @if (session()->has('delete'))
                            <div class="alert alert-danger">
                                {{session()->get('delete')}}
                            </div>
                            @endif

                            @if (session()->has('update'))
                            <div class="alert alert-info">
                                {{session()->get('update')}}
                            </div>
                            @endif
                            {{-- session message ends --}}

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <ul class="nav nav-tabs">

                                <li class="nav-item">
                                    <a href="" data-target="#profile" data-toggle="tab"
                                        class="nav-link active">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">About Me</a>
                                </li>

                                <li class="nav-item">
                                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                                </li>
                            </ul>
                            <div class="tab-content py-4">
                                <div class="tab-pane active" id="profile">
                                    <h2 class="mb-3">{{Auth::user()->name}}<span
                                            style="font-size:17px;">({{Auth::user()->username}})</span></h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><i class="fa fa-envelope"></i>&nbsp; : <span><a
                                                        href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></span>
                                            </h4>
                                            <h4><i class="fa fa-phone"></i>&nbsp;&nbsp; : <span><a
                                                        href="tel:{{Auth::user()->phone}}">{{Auth::user()->phone}}</a></span>
                                            </h4>
                                            <h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp; :
                                                <span>{{Auth::user()->address}}</span></h4>
                                        </div>


                                    </div>

                                </div>
                                <div class="tab-pane" id="messages">
                                    <div class="alert alert-info alert-dismissable">
                                        <a class="panel-close close" data-dismiss="alert">×</a> This is an
                                        <strong>.alert</strong>. Use this to show important messages to the user.
                                    </div>
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is
                                                    your a link to the latest summary report from the..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">Yesterday</span> There
                                                    has been a request on your account since that was..
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/10</span> Porttitor
                                                    vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia
                                                    rhoncus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum
                                                    tincidunt ullamcorper eros eget luctus.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion
                                                    ais the fix for tibulum tincidunt ullamcorper eros.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="edit">
                                    <div class="card-body " id="bar-parent">

                                        <form method="post" action=" {{route('users.update-profile')}} "
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        value="{{Auth::user()->name}}" placeholder="Enter name"
                                                        name="name" data-validation="length"
                                                        data-validation-length="3-400"
                                                        data-validation-error-msg="Name is required (3-50 chars)">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="{{Auth::user()->email}}"
                                                        placeholder="Enter email address" data-validation="email"
                                                        name="email">
                                                </div>
                                                {{-- <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p> --}}
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="number" class="form-control" id="phone"
                                                        value="{{Auth::user()->phone}}" placeholder="Enter Phone Number"
                                                        name="phone">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        value="{{Auth::user()->address}}" placeholder="Enter Address"
                                                        name="address">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username"
                                                        value="{{Auth::user()->username}}" placeholder="Enter username"
                                                        name="username">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password"
                                                        value="password" placeholder="Enter password "
                                                        data-validation="password" name="password">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password-confirm">Confirm Password</label>
                                                    <input id="password-confirm" name="password_confirmation"
                                                        class="form-control" type="password" value="password">
                                                </div>
                                            </div>



                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="hidden" name="image">
                                                    <input type="file" class="form-control" id="image" name="image"
                                                        data-validation="mime size" data-validation-allowing="jpg, png"
                                                        data-validation-max-size="1024kb"
                                                        data-validation-error-msg-required="Please Upload User Image">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update
                                                        User</button>


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id='profile-upload' style="margin-top:60px">
                            <img src="storage/{{Auth::user()->image}}" alt=""
                                class="mx-auto img-fluid img-circle d-block"
                                style=" width:250px; height:250px;   object-fit: cover; ">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
