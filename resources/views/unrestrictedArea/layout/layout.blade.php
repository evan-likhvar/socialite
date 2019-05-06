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
@yield('navigation')
<div class="uk-section uk-section-muted uk-padding-remove-vertical" uk-height-viewport="expand: true">
    @yield('content')
</div>
<div class="uk-section uk-section-muted uk-padding-remove-vertical">
    @yield('bottom')
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
