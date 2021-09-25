@if (config('services.bitbucket.active'))
    <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
        <a style="margin-right: 0px;" class="button button--social-login button--bitbucket" href="{{ route('frontend.auth.social.login', 'bitbucket') }}">
            <i class="icon fa fa-bitbucket"></i> Bitbucket
        </a>
    </div>
{{--    <a href='{{ route('frontend.auth.social.login', 'bitbucket') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-bitbucket'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'BitBucket'])</a>--}}
@endif

@if (config('services.facebook.active'))
    <a href='{{ route('frontend.auth.social.login', 'facebook') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-facebook'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'Facebook'])</a>
@endif

@if (config('services.google.active'))
    <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
        <a style="margin-right: 0px;" class="button button--social-login button--googleplus" href="{{ route('frontend.auth.social.login', 'google') }}">
            <i class="icon fa fa-google"></i>Google
        </a>
    </div>
@endif

@if (config('services.github.active'))
    <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
        <a style="margin-right: 0px;" class="button button--social-login button--github" href="{{ route('frontend.auth.social.login', 'github') }}">
            <i class="icon fa fa-github"></i>Github
        </a>
    </div>
@endif

@if (config('services.linkedin.active'))
    <a href='{{ route('frontend.auth.social.login', 'linkedin') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-linkedin'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'LinkedIn'])</a>
@endif

@if (config('services.twitter.active'))
    <a href='{{ route('frontend.auth.social.login', 'twitter') }}' class='btn btn-sm btn-outline-info m-1'><i class='fab fa-twitter'></i> @lang('labels.frontend.auth.login_with', ['social_media' => 'Twitter'])</a>
@endif
