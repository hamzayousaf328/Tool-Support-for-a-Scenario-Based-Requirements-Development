@extends('inc/layout')
@section('content')
<div class="main-agileinfo">
    <div class="agileits-top">
        <h1>Sign Up Form</h1>
        <br>
        <form action="{{ route('registration') }}" method="post">
            @csrf
            <input class="text text_input" type="text" name="name" placeholder="Username" required="">
            <input class="text email text_input" type="email" name="email" placeholder="Email" required="">
            <input class="text text_input" type="password" name="password" placeholder="Password" required="">
            <input type="submit" class="button gradient-button gradient-button-4" value="SIGNUP">
        </form>
        <p>Already have an Account? <a href="{{ url('/') }}"> Login Here!</a></p>
    </div>
</div>
@endsection
