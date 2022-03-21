@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
{{--            <h3 class="white_color">Activity: {{ Session::get('activity_1') }}</h3>--}}
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createClaims" class="button gradient-button gradient-button-4">Create Claims</a>
            <a href="{{ route('activity') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_claims_div">
                @if(Session::get('claims_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewClaims" class="lookClaims1 button gradient-button gradient-button-4">Claims 1</a></div>
                @endif
                <br><br>
                @if(Session::get('claims_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewClaims" class="lookClaims2 button gradient-button gradient-button-4">Claims 2</a></div>
                @endif
                <br><br>
                @if(Session::get('claims_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewClaims" class="lookClaims3 button gradient-button gradient-button-4">Claims 3</a></div>
                @endif
            </div>
{{--            <br><br>--}}
{{--            <a href="{{ route('diagram') }}" class="button gradient-button gradient-button-4">Create Diagram</a>--}}
        </div>
    </div>

{{--    {{ dd(Session::all()) }}--}}
@endsection
