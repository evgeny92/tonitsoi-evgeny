@extends('layouts.main')

@section('meta-tags')
<title>@lang('content.skills-title')</title>
<meta name="description" content="@lang('content.meta-description')">
<meta name="keywords" content="@lang('content.meta-keywords')">
<meta property="og:title" content="@lang('content.profile-title')">
<meta property="og:description" content="@lang('content.meta-description')">
@endsection

@section('content')

    <section class="skills">
        <div class="container">
            <h2 class="text-center">@lang('content.My Skills')</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h3 class="text-center">@lang('content.Technologies'):</h3>
                    <div class="col-lg-8 mx-auto">
                        <ul class="list-rectangle">
                            <li>@lang('content.Knowledge HTML, CSS')</li>
                            <li>@lang('content.Knowledge PHP')</li>
                            <li>@lang('content.Knowledge MySql')</li>
                            <li>@lang('content.Laravel Framework')</li>
                            <li>@lang('content.Knowledge Linux')</li>
                            <li>@lang('content.Knowledge Terminal')</li>
                            <li>@lang('content.Knowledge VCS')</li>
                            <li>@lang('content.Configuring Web-Servers')</li>
                            <li>@lang('content.Deploying')</li>
                            <li>@lang('content.SEO')</li>
                            <li>@lang('content.Analytics')</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('partials.social')
        </div>
    </section>

@endsection