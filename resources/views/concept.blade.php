@extends('inc/layout')
@section('content')
    <div class="main-agileinfo">
        <div class="agileits-top">
            <h1>Add Concept</h1>
            <form action="{{ route('create_concept') }}" method="post">
                @csrf
                <label for="">Concept</label><br>
                <textarea name="concept" cols="55" rows="5" class="form-control">@if(Session::get('concept')){{ Session::get('concept') }}@endif</textarea><br>
                <label for="">Stack Holder 1</label><br>
                <input name="stack_holder_1" type="text" class="form-control" value="@if(Session::get('stack_holder_1')){{ Session::get('stack_holder_1') }}@endif"/><br>
                <label for="">Stack Holder 2</label><br>
                <input name="stack_holder_2" type="text" class="form-control" value="@if(Session::get('stack_holder_2')){{ Session::get('stack_holder_2') }}@endif"/><br>
                <label for="">Stack Holder 3</label><br>
                <input name="stack_holder_3" type="text" class="form-control" value="@if(Session::get('stack_holder_3')){{ Session::get('stack_holder_3') }}@endif"/><br>
{{--                <label for="">Group Stack Holder 1</label><br>--}}
{{--                <input name="group_stack_holder_1" type="text" value="@if(Session::get('group_stack_holder_1')){{ Session::get('group_stack_holder_1') }}@endif"/><br>--}}
{{--                <label for="">Group Stack Holder 2</label><br>--}}
{{--                <input name="group_stack_holder_2" type="text" value="@if(Session::get('group_stack_holder_2')){{ Session::get('group_stack_holder_2') }}@endif"/><br>--}}
{{--                <label for="">Group Stack Holder 3</label><br>--}}
{{--                <input name="group_stack_holder_3" type="text" value="@if(Session::get('group_stack_holder_3')){{ Session::get('group_stack_holder_3') }}@endif"/><br>--}}

                <label for="">Group Stack Holder</label><br>
                <input type="text" name="group_stack_holder_1" id="group_stack_holder_1" class="form-control" > <a href="javascript:;" id="add_group_stack_holder" class="btn btn-success" style="margin-top: 5px;">Add</a><br><br>


                <button type="submit" class="button gradient-button gradient-button-4">Submit</button>
            </form>
        </div>
    </div>
    {{--            {{ dd(Session::all()) }}--}}
@endsection
