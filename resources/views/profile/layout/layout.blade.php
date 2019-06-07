<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Akronim|Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="uk-container">
    <div class="--uk-grid-divider uk-child-width-expand@s uk-padding-remove" uk-grid>
        <div class="uk-width-1-4@m uk-padding-remove uk-text-small">

            @yield('leftSide')

        </div>

        <div class="uk-padding-remove">
            <div class="uk-section">
                <div class="uk-position-relative">
                    <div class="uk-position-top">
                        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <ul class="uk-navbar-nav">
                                    <li class="uk-active"><a href="{{route('profile')}}">My profile</a></li>
                                    <li><a href="{{route('profile.photos')}}">My photo</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="uk-section">
                <div class="uk-width-1-1@m uk-padding-remove uk-text-small">

                    @yield('content')

                </div>
            </div>
            {{--            <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <li>
                                <div class="uk-section uk-padding-small">
                                    <div class="uk-container">

                                        <div class="js-upload uk-placeholder uk-text-center">
                                            <div id="js-mes"></div>
                                            <span uk-icon="icon: cloud-upload"></span>
                                            <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                                            <div uk-form-custom>
                                                <input type="file" multiple>
                                                <a class="uk-button uk-button-default" href="{{route('image.upload')}}">selecting</a>
                                            </div>
                                        </div>

                                        <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                                    </div>
                                </div>
                            </li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                        </ul>--}}

            <div class="uk-section">
                <div class="uk-section uk-section-default uk-padding-remove-vertical">
                    @yield('bottom')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
