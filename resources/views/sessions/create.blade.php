<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login | {{ config('app.name', 'Laravel') }}</title>

        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
            html,
            body {
              height: 100%;
            }

            body {
              display: -ms-flexbox;
              display: -webkit-box;
              display: flex;
              -ms-flex-align: center;
              -ms-flex-pack: center;
              -webkit-box-align: center;
              align-items: center;
              -webkit-box-pack: center;
              justify-content: center;
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #fff;
            }
        </style>
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <a href="/">
                <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            </a>
            
            <h1 class="h3 mb-3 font-weight-normal">Please login.</h1>
                <label for="email" class="sr-only">Email address</label>
                <input
                    type="email"
                    id="email"
                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email"
                    placeholder="Email address"
                    value="{{ old('email') }}" 
                    aria-label="Username"
                    aria-describedby="user-icon"
                    required
                    autofocus>
            
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
                <label for="password" class="sr-only">Password</label>
                <input
                    type="password"
                    id="password"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    name="password"
                    placeholder="Password"
                    aria-label="Password"
                    aria-describedby="lock-icon"
                    required>
            
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
            <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Login</button>
            <a class="btn btn-lg btn-outline-primary btn-block" href="{{ route('register') }}">Register</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2018 Inner Mind Consulting</p>
        </form>
        <div class="form-group row">
            @include('layouts.errors')
        </div>
    </body>
</html>