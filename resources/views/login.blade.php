@extends('inc/layout')
@section('content')
    <h1 style="margin-top: 50px;font-family: sans-serif;font-size: 55px;">Thesis Project</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <h1>Login Form</h1>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <input class="text email text_input" type="email" name="email" placeholder="Email" required="">
                <input class="text text_input" type="password" name="password" placeholder="Password" required="">
                <input type="submit" class="button gradient-button gradient-button-4" value="Login">
            </form>
            <p>Don't have an Account? <a href="{{ url('signup') }}"> Sign Up Now!</a></p>
        </div>
    </div>
@endsection
