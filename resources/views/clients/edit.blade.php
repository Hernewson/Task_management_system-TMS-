@extends('vendor/main')
@section('title')
<title>Client Management System |Update client|</title>
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
                        <div class="page-title">Update Client </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Update Client</li>
                    </ol>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Basic information of Client
                        </div>
                        <div class="card-body">
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

                            <form action="{{route('clients.update', $client->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter client's name here" autofocus value="{{$client->name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="email">e -mail</label>
                                    <input type="email" class="form-control" name="email" id="email" cols="30" rows="10"
                                        placeholder="Enter client's email here" value=" {{$client->email}} " />
                                </div>
                                <div class="form-group">
                                    <label for="phone_no">Phone number</label>
                                    <input type="tel" class="form-control" name="phone_no" pattern="[0-9]{10}"
                                        id="phone_no" cols="30" rows="10" placeholder="Enter client's phone_no here"
                                        value="{{$client->phone_no}}" />
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company name</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name"
                                        cols="30" rows="10" placeholder="Enter client's company_name here"
                                        value="{{$client->company_name}}" />
                                </div>
                                <div class="form-group">
                                    <label for="city">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" cols="30"
                                        rows="10" placeholder="Enter client's address here"
                                        value="{{$client->address}}" />
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" cols="30" rows="10"
                                        placeholder="Enter client's city here" value="{{$client->city}}" />
                                </div>
                                {{-- <div class="form-group">
                                    <label for="country">Country</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="" selected disabled hidden>Choose country name</option>
                                        <option value="nep">Nepal</option>
                                        <option value="ind">India</option>
                                    </select>
                                </div> --}}

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success ">Update Client</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->
@endsection
