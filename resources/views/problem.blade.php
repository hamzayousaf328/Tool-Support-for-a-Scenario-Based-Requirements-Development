@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <h3 class="white_color">Project Name: {{ Session::get('project_name') }}</h3>
            <h3 class="white_color">User: {{ Session::get('username') }}</h3>
            <h3 class="white_color">Date: {{ Session::get('current_date') }}</h3>
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createProblem" class="button gradient-button gradient-button-4">Create Problem</a>
            <a href="{{ route('project_detail') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_problem_div">
                @if(Session::get('problem_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblem" class="lookProblem1 button gradient-button gradient-button-4">Problem 1</a></div>
                @endif
                <br><br>
                @if(Session::get('problem_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblem" class="lookProblem2 button gradient-button gradient-button-4">Problem 2</a></div>
                @endif
                <br><br>
                @if(Session::get('problem_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblem" class="lookProblem3 button gradient-button gradient-button-4">Problem 3</a></div>
                @endif
                <br><br>
                @if(Session::get('highlighted_problem') != '')
                    <div id="count"><a href="{{ route('highlighted_problem_claims') }}" class="lookProblem3 button gradient-button gradient-button-4">Highlighted Problem</a></div>
                @endif
            </div>
        </div>
    </div>

{{--            {{ dd(Session::all()) }}--}}
@endsection
