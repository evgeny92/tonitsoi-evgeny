<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> @lang('content.Contact Me')</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-md-8 offset-md-2">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <strong>@lang('content.Errors'):</strong>
                    <ul></ul>
                </div>
                <div class="alert alert-success print-success-msg" style="display:none"></div>

                {!! Form::open(['id'=>'contact-form','class'=>'text-center']) !!}
                    <input type="hidden" name="lang" value="{{ App::getLocale() }}">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" id="name" placeholder="@lang('content.Your Name')">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="@lang('content.Your Email')">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-success btn-send-message"><i class="fas fa-paper-plane"></i>
                        @lang('content.Send Message') <span id="loading" style="display: none;"><img class="loader"
                                                                                    src="{{ asset('images/loading.gif') }}"></span>
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>