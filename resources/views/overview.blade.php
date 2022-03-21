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
            @if(Session::has('group_stack_holder_1'))<h3 class="white_color">Group Stack Holder 1: {{ Session::get('group_stack_holder_1') }}</h3>@endif
            @if(Session::has('group_stack_holder_2'))<h3 class="white_color">Group Stack Holder 2: {{ Session::get('group_stack_holder_2') }}</h3>@endif
            @if(Session::has('group_stack_holder_3'))<h3 class="white_color">Group Stack Holder 3: {{ Session::get('group_stack_holder_3') }}</h3>@endif
            <br><br>
            <a href="{{ route('project_detail') }}" class="button gradient-button gradient-button-4">Back</a>
        </div>
    </div>

    {{--            {{ dd(Session::all()) }}--}}
@endsection
