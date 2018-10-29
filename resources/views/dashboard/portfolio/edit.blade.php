@extends('dashboard.layouts.main')

@section('meta-tags')
    <title>Dashboard | Edit Portfolio</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-2 mb-2">
            <a href="{{ URL::previous() }}" class="btn btn-link btn-sm" title="Back">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i>
            </a>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Edit Portfolio
                </div>
                <div class="card-body">
                    {!! Form::model($portfolio, ['route' => ['portfolio.update', $portfolio->id], 'method' => 'PUT', 'files' => 'true' ]) !!}

                    @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label for="translation[{{$locale}}][title]"><strong>Title ({{$locale}})</strong></label>
                            <input type="text" id="title"
                                   name="translation[{{$locale}}][title]"
                                   class="form-control"
                                   value="{{ $portfolio->translate($locale)->title }}">
                        </div>

                        <div class="form-group">
                            <label for="translation[{{$locale}}][content]"><strong>Content ({{$locale}})</strong></label>
                            <textarea name="translation[{{$locale}}][content]"
                                      id="content-{{$locale}}"
                                      class="form-control"
                                      cols="30"
                                      rows="10">{{ $portfolio->translate($locale)->content }}</textarea>
                        </div>
                    @endforeach

                        {!! Form::hidden('id', $portfolio->id) !!}

                    <div class="form-group">
                        <label for="image"><strong>Image</strong></label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="image"><strong>Link</strong></label>
                        <input type="text" id="link" name="link" class="form-control-file" value="{{ $portfolio->link }}">
                    </div>
                    <br>

                    <input class="btn btn-success btn-lg btn-block" type="submit" value="Edit Portfolio">
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