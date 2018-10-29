@extends('dashboard.layouts.main')

@section('meta-tags')
    <title>Dashboard | Main Page</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="far fa-image"></i>
                    </div>
                    <div class="mr-5">{{ $portfolios->count() }} New Portfolios!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('portfolio.index') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
    </div>
@endsection