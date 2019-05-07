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
    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div class="uk-width-1-3@m">
            <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </div>
        </div>
        <div>
            <div class="uk-section">
                <div class="uk-container">form</div>
            </div>
            <div class="uk-section">
                <div class="uk-container">content</div>
            </div>
            <div class="uk-section">
                <div class="uk-container">bottom</div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
