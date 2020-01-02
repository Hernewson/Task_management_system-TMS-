@extends('vendor/main')
@section('title')
<title>User management system </title>
@endsection

@section('content')

<div class="page-container">

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
                        {{-- <div class="page-title">User No. {{$user->id}}</div> --}}
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">User</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-topline-purple">
                    <div class="card-head">
                        <header>All Users List</header>
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
                                    <a href="{{ route('addUser') }}" id="addRow" class="btn btn-info"
                                        style="margin-right: 10px;">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
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
                                        <th> Phone </th>
                                        <th> Email </th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th style="text-align:center;"> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($users as $key=>$user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            @if(!empty($user->phone))

                                            {{ $user->phone }}
                                            @else
                                            Not Available
                                            @endif
                                        </td>
                                        <td>{{ $user->email }} </td>
                                        <td class="left">
                                            @if(!empty($user->address))
                                            {{ $user->address }}
                                            @else
                                            Not Available
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->role }}

                                        </td>
                                        <td style="float:right;">
                                            @if (!$user->isAdmin())
                                            <button class="btn btn-success btn-sm">Make admin</button>
                                            @endif
                                            <a href="{{ route('editUser', $user->id) }}" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            {{-- @if($user->id == auth()->user()->id)
                                                            <button href="javascript:" rel="{{ $user->id }}"
                                            rel1="trash-user" class="btn btn-danger btn-xs deleteRecord"
                                            disabled="disabled">
                                            <i class="fa fa-trash-o "></i>
                                            </button>
                                            @else --}}
                                            <a href="{{ route('deleteUser', $user->id) }}"
                                                class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                            {{-- @endif --}}


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
{{-- <script type="text/javascript">
    @if(session('flash_message'))
    swal("Success!", "{!! session('flash_message') !!}", "success")
    @endif

    @if(session('flash_error'))
    swal("Error", "{!! session('flash_error') !!}")
    @endif
</script> --}}

{{-- <script>
    $(".deleteServiceEnquiryRecord").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
                title: "Are You Sure? ",
                text: "You will not be able to recover this record again",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Delete it!"
            },
            function () {

                window.location.href = "http://localhost/" + deleteFunction + "/" + id;
            });
    });

</script> --}}


@endsection
