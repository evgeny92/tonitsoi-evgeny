<!--<nav class="menu-navigation-basic">
    <img class="img-fluid rounded-circle" src="img/user.jpg" alt="">
    <a href="index2.html" class="selected">Profile</a>
    <a href="skills.html">Skills</a>
    <a href="portfolio.html">Portfolio</a>
    <a href="resume.html">Resume</a>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/user.jpg') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <strong>@lang('content.Menu')</strong>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav text-uppercase">
                <li class="nav-item {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-user"></i> @lang('content.Profile')</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'skills' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('skills') }}"><i class="fas fa-trophy"></i> @lang('content.Skills')</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('portfolio') }}"><i class="fas fa-image"></i> @lang('content.Portfolio')</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'resume' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('resume') }}"><i class="fas fa-file-alt"></i> @lang('content.Resume')</a>
                </li>
            </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> {{ app()->getLocale() }}
                </button>
                <div class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if ($localeCode != app()->getLocale())
                            <a class="dropdown-item text-center"
                               hreflang="{{$localeCode}}"
                               href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                {{ $properties['native'] }}
                            </a>
                       @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</nav>