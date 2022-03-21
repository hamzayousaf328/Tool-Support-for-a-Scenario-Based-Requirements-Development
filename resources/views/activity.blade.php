@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
{{--            <h3 class="white_color">Problem: {{ Session::get('problem_1') }}</h3>--}}
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createActivity" class="button gradient-button gradient-button-4">Create Activity</a>
            <a href="{{ route('problem') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_activity_div">
                @if(Session::get('activity_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewActivity" class="lookActivity1 button gradient-button gradient-button-4">Activity 1</a></div>
                @endif
                <br><br>
                @if(Session::get('activity_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewActivity" class="lookActivity2 button gradient-button gradient-button-4">Activity 2</a></div>
                @endif
                <br><br>
                @if(Session::get('activity_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewActivity" class="lookActivity3 button gradient-button gradient-button-4">Activity 3</a></div>
                @endif
            </div>
            <br><br>
            <a href="{{ route('activity_overview') }}" class="button gradient-button gradient-button-4">Overview</a>
            <a href="{{ route('diagram') }}" class="button gradient-button gradient-button-4">Create Diagram</a>
        </div>
    </div>

{{--{{ dd(Session::all()) }}--}}
@endsection
