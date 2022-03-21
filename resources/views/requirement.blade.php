@extends('inc/layout')
@section('content')
    <div class="main-agileinfo">
        <div class="agileits-top">
            <h1>Add Requirement</h1>
            <form action="{{ route('create_requirement') }}" method="post">
                @csrf
                <label for="">Functional Requirement</label><br>
                <input type="text" name="functional_requirement_1" id="functional_requirement_1" class="form-control" > <a href="javascript:;" id="add_functional_requirement" class="btn btn-success" style="margin-top: 5px;">Add</a><br><br>
                <label for="">Non Functional Requirement</label><br>
                <input type="text" name="non_functional_requirement_1" id="non_functional_requirement_1" class="form-control" > <a href="javascript:;" id="add_non_functional_requirement" class="btn btn-success" style="margin-top: 5px;">Add</a><br><br>
                <button type="submit" class="button gradient-button gradient-button-4">Submit</button>
            </form>
        </div>
    </div>

    {{--            {{ dd(Session::all()) }}--}}
@endsection
