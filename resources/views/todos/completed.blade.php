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
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" / ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Todo</li>
                    </ol>
                </div>
            </div>

            <ul class="list-group">

                @foreach ($todos as $todo)
                @if ($todo->completed)

                <li class="list-group-item">
                    <a href="/todos/{{ $todo->id }}">{{ $todo -> title }}</a>
                    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm float-right"
                        title="Delete this task?">delete </a>

                    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm float-right"
                        title="Edit this task?">Edit</a>

                    {{-- Completed checking point starts here --}}

                    <a href="/todos/{{ $todo->id }}/rollback" class="btn btn-light btn-sm float-left"
                        style="padding:5px;" title="Undo this task?"><i class="fa fa-undo"></i>
                    </a>
                    {{-- Completed checking point ends here --}}


                    {{-- <a href="/todos/{{ $todo->id }}" class="btn button-primary btn-sm float-right">View</a> --}}

                </li>
                @endif

                {{-- <li>
                    {{ $todo -> description }}
                </li> --}}

                @endforeach
            </ul>

            <div class="text-center">

                {{ $todos-> links() }}

            </div>







        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->
@endsection
