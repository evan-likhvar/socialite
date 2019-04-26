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
<div class="uk-child-width-1-2@s uk-grid-collapse uk-text-center" uk-grid>
    <div>
        <div class="uk-tile uk-tile-default">
            <p class="uk-h4">Default</p>
        </div>
    </div>
    <div>
        <div class="uk-tile uk-tile-muted">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-tile uk-tile-primary">
            <p class="uk-h4">Primary</p>

        </div>
    </div>
    <div>
        <div class="uk-tile uk-tile-secondary">
            <p class="uk-h4">Secondary</p>

        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
