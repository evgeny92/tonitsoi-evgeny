@extends('dashboard.layouts.auth')

@section('meta-tags')
    <title>Dashboard | Reset Password</title>
@endsection

@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            @include('dashboard.partials.validation')
            {!! Form::open(['route'=>'password.email']) !!}
            <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                    <label for="email">Email address</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
            {!! Form::close() !!}
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
            </div>
        </div>
    </div>
@endsection