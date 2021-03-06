@extends('vendor/main')
@section('title')
<title>Todo management system |Completed task|</title>
@endsection

@section('content')
<!-- start page container -->
<div class="page-container">
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                @if (session()->has('rollback'))
                <div class="alert alert-warning">
                    {{session()->get('rollback')}}
                </div>
                @endif
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Completed Task </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Todo</li>
                    </ol>
                </div>
            </div>

            <ul class="list-group">
                <div class="col-md-12">
                    <div class="card card-topline-red">
                        <div class="card-head">
                            <header></header>
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
                                        <a href="/todos" id="addRow" class="btn btn-info">
                                            All tasks
                                            {{-- <i class="fa fa-plus"></i> --}}
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
                                            <th> </th>
                                            <th>Tasks</th>
                                            <th>Assigned to</th>
                                            <th>Lead by</th>
                                            <th> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($todos as $todo)
                                        @if ($todo->completed)
                                        <tr class="odd gradeX">
                                            <td style="width:1px; padding-left:5px;">
                                                {{-- Completed checking point starts here --}}

                                                <a href="/todos/{{ $todo->id }}/complete"
                                                    class="btn btn-light  btn-sm float-left" style="padding:5px;"
                                                    title="Tick this task?"><i class="fa fa-check"
                                                        aria-hidden="true"></i>
                                                </a>
                                                {{-- Completed checking point ends here --}}

                                                {{-- <a href="/todos/{{ $todo->id }}" class="btn button-primary
                                                btn-sm float-right">View</a> --}}

                                            </td>
                                            <td>
                                                <a href="/todos/{{ $todo->id }}">{{ $todo -> title }}</a>
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>
                                                <a href="/todos/{{ $todo->id }}/delete"
                                                    class="btn btn-danger btn-sm float-right"
                                                    title="Delete this task?">delete </a>

                                                <a href="/todos/{{ $todo->id }}/edit"
                                                    class="btn btn-info btn-sm float-right"
                                                    title="Edit this task?">Edit</a>
                                            </td>
                                        </tr>
                                        @endif

                                        {{-- <li>
                                                        {{ $todo -> description }}
                                        </li> --}}

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">

                        {{ $todos-> links() }}

                    </div>

                </div>
        </div>

        <div class="text-center">

            {{ $todos-> links() }}

        </div>







    </div>
</div>
<!-- end page content -->

</div>
<!-- end page container -->
@endsection
