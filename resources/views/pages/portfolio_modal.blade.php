<div class="portfolio-modal mfp-hide" id="portfolio-modal-{{ $portfolio->id }}">
    <div class="portfolio-modal-dialog bg-light">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center text-uppercase mb-0">{{ $portfolio->title }}</h2>
                    <hr class="star-dark">
                    <img class="img-fluid" src="{{ asset('images/portfolio/' . $portfolio->image) }}" alt="Single portfolio photo">
                    <p>{!! $portfolio->content !!}</p>
                    <a class="btn btn-success btn-visit-site float-left" href="{{ $portfolio->link }}">
                        <i class="fa fa-close"></i>
                        @lang('content.Visit Website')</a>
                    <a class="btn btn-danger btn-close-project float-right portfolio-modal-dismiss"
                       href="#">
                        <i class="fa fa-close"></i>
                        @lang('content.Go Back')</a>
                </div>
            </div>
        </div>
    </div>
</div>