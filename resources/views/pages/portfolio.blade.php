@extends('layouts.main')

@section('meta-tags')
<title>@lang('content.portfolio-title')</title>
<meta name="description" content="@lang('content.meta-description')">
<meta name="keywords" content="@lang('content.meta-keywords')">
<meta property="og:title" content="@lang('content.profile-title')">
<meta property="og:description" content="@lang('content.meta-description')">
@endsection

@section('content')
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center">@lang('content.My Portfolio')</h2>
            <div class="row">
                @foreach($portfolios as $portfolio)
                <div class="col-lg-6">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-{{ $portfolio->id }}">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="">
                    </a>
                </div>
                @include('pages.portfolio_modal')
                @endforeach
            </div>
            @include('partials.social')
        </div>
    </section>

@endsection