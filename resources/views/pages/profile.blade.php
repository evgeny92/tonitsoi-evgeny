@extends('layouts.main')

@section('meta-tags')
<title>@lang('content.profile-title')</title>
<meta name="description" content="@lang('content.meta-description')">
<meta name="keywords" content="@lang('content.meta-keywords')">
<meta property="og:title" content="@lang('content.profile-title')">
<meta property="og:description" content="@lang('content.meta-description')">
@endsection

@section('content')
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 offset-lg-2 text-center">
                    <img class="img-fluid rounded-circle" src="{{ asset('images/evgeny.jpg') }}" alt="Main photo">
                </div>
                <div class="col-lg-5 text-center">
                    <h1>@lang('content.Name')</h1>
                    <h3>@lang('content.Position')</h3>
                    <p>@lang('content.About Me')</p>
                    <p>
                        <a href="mailto:tonitsoi.evgenii@gmail.com"><i class="far fa-envelope-open"></i> <strong>tonitsoi.evgenii@gmail.com</strong></a><br>
                        <a href="tel:+37379422177"><i class="fas fa-mobile-alt"></i> <strong>+373-79-422-177</strong></a>
                    </p>
                </div>
            </div>
            @include('partials.social')
        </div>
    </section>
@endsection