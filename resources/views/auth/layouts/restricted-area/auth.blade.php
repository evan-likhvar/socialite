<div class="uk-container">

    <div class="uk-tile uk-tile-default uk-padding-small uk-text-center">
        <h2><a href="{{route('start')}}"> <span class="logo2">{{ __('unrestricted-top-block.site_name') }} </span></a> </h2>
    </div>

    <div class="uk-tile uk-tile-default uk-padding-small uk-text-center">
        <a class="uk-button uk-button-default" href="{{ route('login') }}">{{ __('auth.login_button') }}</a>
        <div class="uk-flex uk-flex-center uk-flex-wrap">
            <div class="uk-width-1-6 uk-padding-small uk-padding-remove-right">@include('includes.svg.mail-ru')</div>
            <div class="uk-width-1-6 uk-padding-small uk-padding-remove-right">@include('includes.svg.yandex')</div>
            <div class="uk-width-1-6  uk-padding-small uk-padding-remove-right">@include('includes.svg.odnoklassniki')</div>
            <div class="uk-width-1-6  uk-padding-small uk-padding-remove-right">@include('includes.svg.msn')</div>
            <div class="uk-width-1-6  uk-padding-small uk-padding-remove-right">@include('includes.svg.google')</div>
            <div class="uk-width-1-6  uk-padding-small uk-padding-remove-right">@include('includes.svg.facebook')</div>
            <div class="uk-width-1-6  uk-padding-small uk-padding-remove-right">@include('includes.svg.vkontakte')</div>
        </div>

    </div>
    @yield('form_title')

    @yield('form')

</div>

