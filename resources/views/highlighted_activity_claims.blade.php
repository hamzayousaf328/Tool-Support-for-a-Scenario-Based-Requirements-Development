@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <h3 class="white_color">Highlighted Activity: {{ Session::get('highlighted_activity') }}</h3>
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createHighlightedActivityClaims" class="button gradient-button gradient-button-4">Create Highlighted Activity Claims</a>
            <a href="{{ route('activity') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_highlighted_activity_claims_div">
                @if(Session::get('highlighted_activity_claims_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedActivityClaims" class="lookHighlightedActivityClaims1 button gradient-button gradient-button-4">Highlighted Activity Claims 1</a></div>
                @endif
                <br><br>
                @if(Session::get('highlighted_activity_claims_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedActivityClaims" class="lookHighlightedActivityClaims2 button gradient-button gradient-button-4">Highlighted Activity Claims 2</a></div>
                @endif
                <br><br>
                @if(Session::get('highlighted_activity_claims_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedActivityClaims" class="lookHighlightedActivityClaims3 button gradient-button gradient-button-4">Highlighted Activity Claims 3</a></div>
                @endif
            </div>
        </div>
    </div>

    {{--        {{ dd(Session::all()) }}--}}
@endsection
