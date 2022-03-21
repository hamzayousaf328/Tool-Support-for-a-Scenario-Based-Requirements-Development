@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <h1>Project Detail</h1>
            <br>
            <a href="{{ route('requirement') }}" class="button gradient-button gradient-button-4">Requirements</a>
            <a href="{{ route('concept') }}" class="button gradient-button gradient-button-4">Concepts</a>
            <a href="{{ route('overview') }}" class="button gradient-button gradient-button-4">Overview</a>
            <a href="{{ route('problem') }}" class="button gradient-button gradient-button-4">Create Problem</a>
            <a href="{{ route('home') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
        </div>
    </div>

{{--            {{ dd(Session::all()) }}--}}
@endsection
