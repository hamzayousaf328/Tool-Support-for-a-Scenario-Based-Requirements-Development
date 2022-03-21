@extends('inc/layout')
@section('content')
    <div class="regular_background">
        <div class="agileits-top">
            <h3 class="white_color">Project Name: {{ Session::get('project_name') }}</h3>
            <h3 class="white_color">User: {{ Session::get('username') }}</h3>
            <h3 class="white_color">Date: {{ Session::get('current_date') }}</h3>
            @if(Session::has('functional_requirement_1'))<h3 class="white_color">Functional Requirement 1: {{ Session::get('functional_requirement_1') }}</h3>@endif
            @if(Session::has('functional_requirement_2'))<h3 class="white_color">Functional Requirement 2: {{ Session::get('functional_requirement_2') }}</h3>@endif
            @if(Session::has('functional_requirement_3'))<h3 class="white_color">Functional Requirement 3: {{ Session::get('functional_requirement_3') }}</h3>@endif
            @if(Session::has('non_functional_requirement_1'))<h3 class="white_color">Non Functional Requirement 1: {{ Session::get('non_functional_requirement_1') }}</h3>@endif
            @if(Session::has('non_functional_requirement_2'))<h3 class="white_color">Non Functional Requirement 2: {{ Session::get('non_functional_requirement_2') }}</h3>@endif
            @if(Session::has('non_functional_requirement_3'))<h3 class="white_color">Non Functional Requirement 3: {{ Session::get('non_functional_requirement_3') }}</h3>@endif
            @if(Session::has('concept'))<h3 class="white_color">Concept: {{ Session::get('concept') }}</h3>@endif
            @if(Session::has('stack_holder_1'))<h3 class="white_color">Stack Holder 1: {{ Session::get('stack_holder_1') }}</h3>@endif
            @if(Session::has('stack_holder_2'))<h3 class="white_color">Stack Holder 2: {{ Session::get('stack_holder_2') }}</h3>@endif
            @if(Session::has('stack_holder_3'))<h3 class="white_color">Stack Holder 3: {{ Session::get('stack_holder_3') }}</h3>@endif

            @if(Session::has('problem_1'))<h3 class="white_color">Problem 1: {{ Session::get('problem_1') }}</h3>@endif
            @if(Session::has('activity_1'))<h3 class="white_color">-> Activity 1: {{ Session::get('activity_1') }}</h3>@endif
            @if(Session::has('claims_1'))<h3 class="white_color">--> Claims 1: {{ Session::get('claims_1') }}</h3>@endif
            @if(Session::has('pros_1_1'))<h3 class="white_color">---> Activity 1 -> Pros 1: {{ Session::get('pros_1_1') }}</h3>@endif
            @if(Session::has('pros_1_2'))<h3 class="white_color">---> Activity 1 -> Pros 2: {{ Session::get('pros_1_2') }}</h3>@endif
            @if(Session::has('pros_1_3'))<h3 class="white_color">---> Activity 1 -> Pros 3: {{ Session::get('pros_1_3') }}</h3>@endif
            @if(Session::has('cons_1_1'))<h3 class="white_color">---> Activity 1 -> Cons 1: {{ Session::get('cons_1_1') }}</h3>@endif
            @if(Session::has('cons_1_2'))<h3 class="white_color">---> Activity 1 -> Cons 2: {{ Session::get('cons_1_2') }}</h3>@endif
            @if(Session::has('cons_1_3'))<h3 class="white_color">---> Activity 1 -> Cons 3: {{ Session::get('cons_1_3') }}</h3>@endif
            @if(Session::has('problem_claims_1'))<h3 class="white_color">--> Problem Claims 1: {{ Session::get('problem_claims_1') }}</h3>@endif
            @if(Session::has('problem_pros_1_1'))<h3 class="white_color">---> Problem Claims 1 -> Pros 1: {{ Session::get('problem_pros_1_1') }}</h3>@endif
            @if(Session::has('problem_pros_1_2'))<h3 class="white_color">---> Problem Claims 1 -> Pros 2: {{ Session::get('problem_pros_1_2') }}</h3>@endif
            @if(Session::has('problem_pros_1_3'))<h3 class="white_color">---> Problem Claims 1 -> Pros 3: {{ Session::get('problem_pros_1_3') }}</h3>@endif
            @if(Session::has('problem_cons_1_1'))<h3 class="white_color">---> Problem Claims 1 -> Cons 1: {{ Session::get('problem_cons_1_1') }}</h3>@endif
            @if(Session::has('problem_cons_1_2'))<h3 class="white_color">---> Problem Claims 1 -> Cons 2: {{ Session::get('problem_cons_1_2') }}</h3>@endif
            @if(Session::has('problem_cons_1_3'))<h3 class="white_color">---> Problem Claims 1 -> Cons 3: {{ Session::get('problem_cons_1_3') }}</h3>@endif

            @if(Session::has('problem_2'))<h3 class="white_color">Problem 2: {{ Session::get('problem_2') }}</h3>@endif
            @if(Session::has('activity_2'))<h3 class="white_color">-> Activity 2: {{ Session::get('activity_2') }}</h3>@endif
            @if(Session::has('claims_2'))<h3 class="white_color">--> Claims 2: {{ Session::get('claims_2') }}</h3>@endif
            @if(Session::has('pros_2_1'))<h3 class="white_color">---> Activity 2 -> Pros 1: {{ Session::get('pros_2_1') }}</h3>@endif
            @if(Session::has('pros_2_2'))<h3 class="white_color">---> Activity 2 -> Pros 2: {{ Session::get('pros_2_2') }}</h3>@endif
            @if(Session::has('pros_2_3'))<h3 class="white_color">---> Activity 2 -> Pros 3: {{ Session::get('pros_2_3') }}</h3>@endif
            @if(Session::has('cons_2_1'))<h3 class="white_color">---> Activity 2 -> Cons 1: {{ Session::get('cons_2_1') }}</h3>@endif
            @if(Session::has('cons_2_2'))<h3 class="white_color">---> Activity 2 -> Cons 2: {{ Session::get('cons_2_2') }}</h3>@endif
            @if(Session::has('cons_2_3'))<h3 class="white_color">---> Activity 2 -> Cons 3: {{ Session::get('cons_2_3') }}</h3>@endif
            @if(Session::has('problem_claims_2'))<h3 class="white_color">--> Problem Claims 2: {{ Session::get('problem_claims_2') }}</h3>@endif
            @if(Session::has('problem_pros_2_1'))<h3 class="white_color">---> Problem Claims 2 -> Pros 1: {{ Session::get('problem_pros_2_1') }}</h3>@endif
            @if(Session::has('problem_pros_2_2'))<h3 class="white_color">---> Problem Claims 2 -> Pros 2: {{ Session::get('problem_pros_2_2') }}</h3>@endif
            @if(Session::has('problem_pros_2_3'))<h3 class="white_color">---> Problem Claims 2 -> Pros 3: {{ Session::get('problem_pros_2_3') }}</h3>@endif
            @if(Session::has('problem_cons_2_1'))<h3 class="white_color">---> Problem Claims 2 -> Cons 1: {{ Session::get('problem_cons_2_1') }}</h3>@endif
            @if(Session::has('problem_cons_2_2'))<h3 class="white_color">---> Problem Claims 2 -> Cons 2: {{ Session::get('problem_cons_2_2') }}</h3>@endif
            @if(Session::has('problem_cons_2_3'))<h3 class="white_color">---> Problem Claims 2 -> Cons 3: {{ Session::get('problem_cons_2_3') }}</h3>@endif

            @if(Session::has('problem_3'))<h3 class="white_color">Problem 3: {{ Session::get('problem_3') }}</h3>@endif
            @if(Session::has('activity_3'))<h3 class="white_color">-> Activity 3: {{ Session::get('activity_3') }}</h3>@endif
            @if(Session::has('claims_3'))<h3 class="white_color">--> Claims 3: {{ Session::get('claims_3') }}</h3>@endif
            @if(Session::has('pros_3_1'))<h3 class="white_color">---> Activity 3 -> Pros 1: {{ Session::get('pros_3_1') }}</h3>@endif
            @if(Session::has('pros_3_2'))<h3 class="white_color">---> Activity 3 -> Pros 2: {{ Session::get('pros_3_2') }}</h3>@endif
            @if(Session::has('pros_3_3'))<h3 class="white_color">---> Activity 3 -> Pros 3: {{ Session::get('pros_3_3') }}</h3>@endif
            @if(Session::has('cons_3_1'))<h3 class="white_color">---> Activity 3 -> Cons 1: {{ Session::get('cons_3_1') }}</h3>@endif
            @if(Session::has('cons_3_2'))<h3 class="white_color">---> Activity 3 -> Cons 2: {{ Session::get('cons_3_2') }}</h3>@endif
            @if(Session::has('cons_3_3'))<h3 class="white_color">---> Activity 3 -> Cons 3: {{ Session::get('cons_3_3') }}</h3>@endif
            @if(Session::has('problem_claims_3'))<h3 class="white_color">--> Problem Claims 3: {{ Session::get('problem_claims_3') }}</h3>@endif
            @if(Session::has('problem_pros_3_1'))<h3 class="white_color">---> Problem Claims 3 -> Pros 1: {{ Session::get('problem_pros_3_1') }}</h3>@endif
            @if(Session::has('problem_pros_3_2'))<h3 class="white_color">---> Problem Claims 3 -> Pros 2: {{ Session::get('problem_pros_3_2') }}</h3>@endif
            @if(Session::has('problem_pros_3_3'))<h3 class="white_color">---> Problem Claims 3 -> Pros 3: {{ Session::get('problem_pros_3_3') }}</h3>@endif
            @if(Session::has('problem_cons_3_1'))<h3 class="white_color">---> Problem Claims 3 -> Cons 1: {{ Session::get('problem_cons_3_1') }}</h3>@endif
            @if(Session::has('problem_cons_3_2'))<h3 class="white_color">---> Problem Claims 3 -> Cons 2: {{ Session::get('problem_cons_3_2') }}</h3>@endif
            @if(Session::has('problem_cons_3_3'))<h3 class="white_color">---> Problem Claims 3 -> Cons 3: {{ Session::get('problem_cons_3_3') }}</h3>@endif

            @if(Session::has('highlighted_problem'))<h3 class="white_color">Highlighted Problem: {{ Session::get('highlighted_problem') }}</h3>@endif
            @if(Session::has('highlighted_problem_claims_1'))<h3 class="white_color">--> Highlighted Problem Claims: {{ Session::get('highlighted_problem_claims_1') }}</h3>@endif
            @if(Session::has('highlighted_problem_pros_1_1'))<h3 class="white_color">---> Highlighted Problem Claims -> Pros 1: {{ Session::get('highlighted_problem_pros_1_1') }}</h3>@endif
            @if(Session::has('highlighted_problem_pros_1_2'))<h3 class="white_color">---> Highlighted Problem Claims -> Pros 2: {{ Session::get('highlighted_problem_pros_1_2') }}</h3>@endif
            @if(Session::has('highlighted_problem_pros_1_3'))<h3 class="white_color">---> Highlighted Problem Claims -> Pros 3: {{ Session::get('highlighted_problem_pros_1_3') }}</h3>@endif
            @if(Session::has('highlighted_problem_cons_1_1'))<h3 class="white_color">---> Highlighted Problem Claims -> Cons 1: {{ Session::get('highlighted_problem_cons_1_1') }}</h3>@endif
            @if(Session::has('highlighted_problem_cons_1_2'))<h3 class="white_color">---> Highlighted Problem Claims -> Cons 2: {{ Session::get('highlighted_problem_cons_1_2') }}</h3>@endif
            @if(Session::has('highlighted_problem_cons_1_3'))<h3 class="white_color">---> Highlighted Problem Claims -> Cons 3: {{ Session::get('highlighted_problem_cons_1_3') }}</h3>@endif
            <br><br>
            <a href="{{ route('activity') }}" class="button gradient-button gradient-button-4">Back</a>
        </div>
    </div>

{{--                {{ dd(Session::all()) }}--}}
@endsection
