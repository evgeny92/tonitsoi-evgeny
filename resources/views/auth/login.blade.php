@extends('dashboard.layouts.auth')

@section('meta-tags')
    <title>Dashboard | Login</title>
@endsection

@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            @include('dashboard.partials.validation')
            {!! Form::open(['route'=>'login']) !!}
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="email"
                               name="email"
                               class="form-control"
                               placeholder="Email address"
                               required="required"
                               value="{{ old('email') }}"
                               autofocus="autofocus">
                        <label for="email">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password"
                               name="password"
                               class="form-control"
                               placeholder="Password"
                               required="required">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember Me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            {!! Form::close() !!}
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
    </div>
@endsection