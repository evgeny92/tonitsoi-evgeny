@extends('dashboard.layouts.main')

@section('meta-tags')
    <title>Dashboard | Create New Portfolio</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-2 mb-2">
            <a href="{{ route('portfolio.index') }}" class="btn btn-link btn-sm" title="Back">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i>
            </a>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Add New Portfolio
                </div>
                <div class="card-body">
                    {!! Form::open([ 'route' => 'portfolio.store', 'files' => 'true']) !!}

                        @foreach(config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label for="translation[{{$locale}}][title]"><strong>Title ({{$locale}})</strong></label>
                                <input type="text" id="title"
                                       name="translation[{{$locale}}][title]"
                                       class="form-control"
                                       value="{{ old('translation.'. $locale.'.title')  }}">
                            </div>

                            <div class="form-group">
                                <label for="translation[{{$locale}}][content]"><strong>Content ({{$locale}})</strong></label>
                                <textarea name="translation[{{$locale}}][content]"
                                          id="content-{{$locale}}"
                                          class="form-control"
                                          cols="30"
                                          rows="10">{{ old('translation.'. $locale.'.content') }}</textarea>
                            </div>
                        @endforeach

                            <div class="form-group">
                                <label for="image"><strong>Image</strong></label>
                                <input type="file" id="image" name="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="image"><strong>Link</strong></label>
                                <input type="text" id="link" name="link" class="form-control-file"
                                       placeholder="https://site.com"
                                       value="{{ old('link') }}">
                            </div>
                            <br>

                            <input class="btn btn-success btn-lg btn-block" type="submit" value="Add Portfolio">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <script>
        @foreach(config('translatable.locales') as $locale)
            CKEDITOR.replace('content-{{$locale}}');
        @endforeach
    </script>
    {!! toastr()->render() !!}
@endsection