@extends('vendor/main')
@section('title')
<title>Todo management system |Add User|</title>
@endsection

@section('content')

<!-- start page container -->
<div class="page-container">
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add New User</div>
                            </div>

                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href=" /home ">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add New User</li>
                            </ol>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>New User Details</header>
                        </div>

                        <div class="col-md-8">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if(Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                {!! session('flash_message_error') !!}

                            </div>
                            @endif
                        </div>



                        <div class="card-body " id="bar-parent">
                            <form method="post" action="{{route('addUser')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                                            name="name" data-validation="length" data-validation-length="3-400"
                                            data-validation-error-msg="Name is required (3-50 chars)">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email address" data-validation="email" name="email"
                                            autocomplete="email">
                                    </div>
                                    {{-- <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p> --}}
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password " data-validation="password" name="password">
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter Address"
                                            name="address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter Phone Number" name="phone">
                                    </div>
                                </div>

                                {{-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="role_id">Assign Department</label>
                                                <select name="role_id" id="role_id" class="form-control" data-validation="required"
                                                        data-validation-error-msg="Select User Role">
                                                    <option selected disabled="">Select Department</option>

                                                </select>
                                            </div>
                                        </div> --}}

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="hidden" name="current_image">
                                        <input type="file" class="form-control" id="image" name="image"
                                            data-validation="mime size" data-validation-allowing="jpg, png"
                                            data-validation-max-size="1024kb"
                                            data-validation-error-msg-required="Please Upload User Image">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add New User</button>
                                        <a href="{{ route('viewAllUsers') }}" class="btn btn-info">View All</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js">
</script>

<script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });

    // $(document).ready(function() {

    //     $('.enquiry-category-multiselect').select2({
    //         placeholder: 'Please Choose Category'
    //     });

    //     $('.select2-multiple').select2({
    //         placeholder: 'Please Choose Source'
    //     });

    //     $('.responses-multiselect').select2({
    //         placeholder: 'Responded Through'
    //     });


    // });
</script>

<script src="{{ asset('public/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.sweet-alert.custom.js') }}"></script>


@endsection
