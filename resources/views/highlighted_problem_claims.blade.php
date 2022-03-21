@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <h3 class="white_color">Highlighted Problem: {{ Session::get('highlighted_problem') }}</h3>
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createHighlightedProblemClaims" class="button gradient-button gradient-button-4">Create Highlighted Problem Claims</a>
            <a href="{{ route('problem') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_highlighted_problem_claims_div">
                @if(Session::get('highlighted_problem_claims_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedProblemClaims" class="lookHighlightedProblemClaims1 button gradient-button gradient-button-4">Highlighted Problem Claims 1</a></div>
                @endif
                <br><br>
                @if(Session::get('highlighted_problem_claims_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedProblemClaims" class="lookHighlightedProblemClaims2 button gradient-button gradient-button-4">Highlighted Problem Claims 2</a></div>
                @endif
                <br><br>
                @if(Session::get('highlighted_problem_claims_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewHighlightedProblemClaims" class="lookHighlightedProblemClaims3 button gradient-button gradient-button-4">Highlighted Problem Claims 3</a></div>
                @endif
            </div>
        </div>
    </div>

{{--        {{ dd(Session::all()) }}--}}
@endsection
