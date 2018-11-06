@extends('layouts.main')

@section('meta-tags')
<title>@lang('content.resume-title')</title>
<meta name="description" content="@lang('content.meta-description')">
<meta name="keywords" content="@lang('content.meta-keywords')">
<meta property="og:title" content="@lang('content.profile-title')">
<meta property="og:description" content="@lang('content.meta-description')">
@endsection

@section('content')
    <section class="resume">
        <div class="container">
            <h2 class="text-center">@lang('content.My Resume')</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h3>@lang('content.Resume Main')</h3>
                    <div class="btn-center"> <a href="{{ url('resume/download') }}" class="btn btn-success btn-download-resume"><i class="fas fa-cloud-download-alt"></i> @lang('content.Download Resume')</a>
                        <h2>67,9 @lang('content.Kb')</h2>
                    </div>
                </div>
            </div>
            @include('partials.social')
        </div>
    </section>
@endsection