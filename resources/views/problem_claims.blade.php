@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <br><br>
            <a href="#" data-toggle="modal" data-target="#createProblemClaims" class="button gradient-button gradient-button-4">Create Problem Claims</a>
            <a href="{{ route('problem') }}" class="button gradient-button gradient-button-4">Back</a>
            <a href="{{ route('logout') }}" class="button gradient-button gradient-button-4">Logout</a>
            <br><br><br>
            <div id="view_problem_claims_div">
                @if(Session::get('problem_claims_1') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblemClaims" class="lookProblemClaims1 button gradient-button gradient-button-4">Problem Claims 1</a></div>
                @endif
                <br><br>
                @if(Session::get('problem_claims_2') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblemClaims" class="lookProblemClaims2 button gradient-button gradient-button-4">Problem Claims 2</a></div>
                @endif
                <br><br>
                @if(Session::get('problem_claims_3') != '')
                    <div id="count"><a href="#" data-toggle="modal" data-target="#viewProblemClaims" class="lookProblemClaims3 button gradient-button gradient-button-4">Problem Claims 3</a></div>
                @endif
            </div>
        </div>
    </div>

    {{--    {{ dd(Session::all()) }}--}}
@endsection
