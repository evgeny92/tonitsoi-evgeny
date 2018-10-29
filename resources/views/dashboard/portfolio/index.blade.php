@extends('dashboard.layouts.main')

@section('meta-tags')
    <title>Dashboard | Current Portfolio</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                All the current portfolio
            </div>
            <div class="card-body">
                <table class="table table-hover table-responsive">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <th scope="row">{{ $portfolio->id }}</th>
                            <td><a href="{{ route('portfolio.show', $portfolio->id) }}">{{ str_limit($portfolio->title, 40) }}</a></td>
                            <td>{!! str_limit($portfolio->content, 60) !!}</td>
                            <td><img src="{{ asset('images/portfolio/' . $portfolio->image) }}" width="70"
                                     height="50"></td>
                            <td>
                                <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-link btn-sm"
                                   title="Portfolio Show"><i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-link btn-sm"
                                   title="Portfolio Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                {!! Form::open(['route' => ['portfolio.destroy', $portfolio->id], 'style' => 'display:inline', 'class' => 'delete', 'method' => 'DELETE']) !!}
                                <button class="btn btn-link btn-sm delete" title="Portfolio Delete" type="submit" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                               {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('portfolio.create') }}" class="btn btn-success"><i class="fas fa-plus"></i>
                    Add New Portfolio</a>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! toastr()->render() !!}
@endsection