@extends('layouts.main')

@section('meta-tags')
    <title>@lang('content.error-title')</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-template">
                    <h1>@lang('content.error-template-h1')</h1>
                    <h2>@lang('content.error-template-h2')</h2>
                    <div class="error-details">
                        @lang('content.error-details')
                    </div>
                    <div class="error-actions">
                        <a href="{{ route('profile') }}" class="btn btn-posts btn-lg"><i class="fas fa-home"></i> @lang('content.error-actions')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection