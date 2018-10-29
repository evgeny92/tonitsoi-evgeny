@extends('dashboard.layouts.auth')

@section('meta-tags')
    <title>Dashboard | Reset Password</title>
@endsection

@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            @include('dashboard.partials.validation')
            {!! Form::open(['route'=>'password.request']) !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="email" name="email"
                           class="form-control"
                           placeholder="Email address"
                           required="required"
                           autofocus="autofocus"
                           value="{{ $email or old('email') }}">
                    <label for="email">Email address</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="password" name="password"
                           class="form-control"
                           placeholder="Password"
                           required="required">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="password-confirm" name="password_confirmation"
                           class="form-control"
                           placeholder="Confirm password"
                           required="required">
                    <label for="password-confirm">Confirm password</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection