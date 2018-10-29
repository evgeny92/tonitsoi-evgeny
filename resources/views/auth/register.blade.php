@extends('dashboard.layouts.auth')

@section('meta-tags')
    <title>Dashboard | Register</title>
@endsection

@section('content')
<div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    @include('dashboard.partials.validation')
    <div class="card-body">
        @include('dashboard.partials.validation')
        {!! Form::open(['route'=>'register']) !!}
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="name" name="name"
                                   class="form-control"
                                   placeholder="Name"
                                   required="required"
                                   value="{{ old('name') }}"
                                   autofocus="autofocus">
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="email" id="email" name="email"
                                   class="form-control"
                                   placeholder="Email address"
                                   required="required"
                                   value="{{ old('email') }}">
                            <label for="email">Email address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="password" name="password"
                                   class="form-control"
                                   placeholder="Password"
                                   required="required">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="password-confirm" name="password_confirmation"
                                   class="form-control"
                                   placeholder="Confirm password"
                                   required="required">
                            <label for="password-confirm">Confirm password</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        {!! Form::close() !!}
        <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
        </div>
    </div>
</div>
@endsection