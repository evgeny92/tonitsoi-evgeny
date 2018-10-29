@extends('dashboard.layouts.main')

@section('meta-tags')
    <title>Dashboard | Show Portfolio</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-2">
            <a href="{{ route('portfolio.index') }}" class="btn btn-link btn-sm" title="Back">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i>
            </a>
            <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-link btn-sm" title="Edit portfolio">
                <i class="far fa-edit fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="card">
                <div class="card-header">
                    Show Portfolio (En)
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">{{ $portfolio->translate('en')->title }}</h4>
                    <img class="img-fluid mb-3" src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="site-photo">
                    {!! $portfolio->translate('en')->content !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card">
                <div class="card-header">
                    Show Portfolio (Ru)
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">{{ $portfolio->translate('ru')->title }}</h4>
                    <img class="img-fluid mb-3" src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="site-photo">
                    {!! $portfolio->translate('ru')->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection