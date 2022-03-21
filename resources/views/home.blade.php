@extends('inc/layout')
@section('content')
    <div class="main-agileinfo">
        <div class="agileits-top">
            <h1>Hi {{ Session::get('username') }}</h1>
            <br>
            <br>
            @if(Session::has('project_name'))
                <a href="{{ url('project_detail') }}" class="button gradient-button gradient-button-4">Edit Project</a>
            @else
                <a href="#" data-toggle="modal" data-target="#createProject" class="button gradient-button gradient-button-4">Create Project</a>
            @endif

            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
        </div>
        <table id="example" class="table table-hover table-bordered" style="width:100%">
            <thead>
            <tr>
                <th style="font-weight: 700;">My Project List</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




{{--    <script>--}}
{{--    $(document).ready(function() {--}}
{{--            $('#example').DataTable();--}}
{{--        } );--}}
{{--    </script>--}}

{{--        {{ dd(Session::all()) }}--}}
@endsection
