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
        <div>
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="{{ Request::is('profile') ? 'uk-active' : '' }}"><a href="{{route('profile')}}">My
                                profile</a></li>
                        <li class="{{ Request::is('profile/photos') ? 'uk-active' : '' }}"><a
                                    href="{{route('profile.photos')}}">My photo</a></li>
                        <li class="{{ Request::is('profile/settings') ? 'uk-active' : '' }}"><a
                                    href="{{route('profile.settings')}}">Settings</a></li>
                    </ul>

                </div>
            </nav>
            @yield('content')
            <div class="uk-section uk-section-default uk-padding-remove-vertical">
                @yield('bottom')
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
