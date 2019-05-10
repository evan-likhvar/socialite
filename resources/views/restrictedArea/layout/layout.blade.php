<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="uk-container">
    <div class="--uk-grid-divider uk-child-width-expand@s uk-padding-remove" uk-grid>
        <div class="uk-width-1-4@m uk-padding-remove uk-text-small">

            @yield('leftSide')

        </div>
        <div class="uk-padding-remove">
            <div class="uk-section uk-padding-small">
                <div class="uk-container">form</div>
            </div>
            <div class="uk-section uk-padding-small">
                <div class="uk-container">
                    <img src="/storage/w3.png"></div>
            </div>
            <div class="uk-section">
                <div class="uk-section uk-section-muted uk-padding-remove-vertical">
                    @yield('bottom')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
