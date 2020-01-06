@extends('vendor/main')
@section('title')
<title>Department management system </title>
@endsection

@section('content')

<div class="page-container">

    <div class="page-content-wrapper">

        <div class="page-content">
            <div class="page-bar">

                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        {{-- <div class="page-title">User No. {{$user->id}}</div> --}}
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Department</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6-offset col-md-6"> {{-- session message starts --}}
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
                {{-- session message ends --}}</div>


            <div class="col-md-12">
                <div class="tabbable-line">
                <ul class="nav customtab nav-tabs" href="/departments.index#tab1" ole="tablist">
                    <li class="nav-item"><a onclick="switch_div(1)" class="nav-link  active"
                            data-toggle="tab">List
                            View</a></li>
                    <li class="nav-item"><a onclick="switch_div(2)" class="nav-link " data-toggle="tab">Grid
                            View</a></li>
                </ul>

                <div class="card card-topline-purple">


                    <div class="card-head">
                        <header>All Department List</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="{{ route('departments.create') }}" id="addRow" class="btn btn-info"
                                        style="margin-right: 10px;">
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
                                        <th>S.N.</th>
                                        <th> Name </th>
                                        <th>Description</th>
                                        <th style="text-align:center;"> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($departments as $key=>$department)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $department->name }}</td>

                                        <td>
                                            {{ $department->description }}

                                        </td>
                                        <td style="display:flex; padding-top: 24px;;"
                                            class="center">
                                            <a href=" {{route('departments.edit', $department->id)}} "
                                                class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form
                                                action="{{route('departments.destroy',$department->id)}}"
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
</div>
</div>
@endsection

@section('css')
<!-- data tables -->
<link href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<!-- data tables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/table/table_data.js') }}"></script>


<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sweet-alert.custom.js') }}"></script>



@endsection
