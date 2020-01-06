@extends('vendor/main')
@section('title')
<title>Client management system | homepage |</title>
@endsection

@section('content')
<!-- start page container -->
<div class="page-container">

    <!-- start page content -->
    <div class="page-content-wrapper">

        <div class="page-content">
            <div class="page-bar">


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


                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Clients</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Clients</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav customtab nav-tabs" href="/clients.index#tab1" ole="tablist">
                            <li class="nav-item"><a onclick="switch_div(1)" class="nav-link  active"
                                    data-toggle="tab">List
                                    View</a></li>
                            <li class="nav-item"><a onclick="switch_div(2)" class="nav-link " data-toggle="tab">Grid
                                    View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active  fontawesome-demo" id="show_1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-topline-red">
                                            <div class="card-head">
                                                <header></header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh"
                                                        href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down"
                                                        href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="/clients/create" id="addRow" class="btn btn-info">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group pull-right">
                                                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                                data-toggle="dropdown">Tools
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-print"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-pdf-o"></i> Save as
                                                                        PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-excel-o"></i>
                                                                        Export to Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                        id="example4">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th> Name </th>
                                                                <th> email </th>
                                                                <th> Phone number </th>
                                                                <th> Company name </th>
                                                                <th> Address </th>
                                                                <th>City</th>
                                                                <th> Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($clients as $client)
                                                            <tr class="odd gradeX">
                                                                <td class="patient-img">
                                                                    <img src="../assets/img/std/std1.jpg" alt="">
                                                                </td>
                                                                <td class="center">{{$client->name}}</td>
                                                                <td><a
                                                                        href="mailto:{{$client->email}}">{{$client->email}}</a>
                                                                </td>
                                                                <td> <a
                                                                        href="tel:{{$client->phone_no}}">{{$client->phone_no}}</a>
                                                                </td>
                                                                <td class="center">{{$client->company_name}}</td>
                                                                <td class="center">{{$client->address}}</td>
                                                                <td class="center">{{$client->city}}</td>
                                                                <td style="display:flex; padding-top: 24px;;"
                                                                    class="center">
                                                                    <a href=" {{route('clients.edit', $client->id)}} " title="Edit Clients"
                                                                        class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <form
                                                                        action="{{route('clients.destroy',$client->id)}}" title="Delete Clients"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger btn-xs">
                                                                            <i class="fa fa-trash-o "></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  " id="show_2">
                                @foreach($clients as $client)

                                <div class="">
                                    <div class="col-md-4">
                                        <div class="card card-topline-aqua">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/std/std1.jpg" class="doctor-pic" alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">{{$client->name}} </div>
                                                        <div class="name-center"> <a
                                                                href="mailto:{{$client->email}}">{{$client->email}}</a>
                                                        </div>
                                                    </div>
                                                    <p>{{$client->address}}<br />{{$client->city}}</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:{{$client->phone_no}}">
                                                                {{$client->phone_no}}</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.html"
                                                            class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach


                            </div>
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
