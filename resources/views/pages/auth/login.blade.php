@extends('layouts.auth')

@section('title')
    Login Page
@endsection

@section('content')
    <div class="container">
        <div class="row h-full mt-5">
            <div class="d-flex justify-content-center mx-auto">
                <turbo-frame id="login">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
                            alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address"
                            required autofocus>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                            required>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                    </form>
                </turbo-frame>
            </div>
        </div>
    </div>
@endsection
