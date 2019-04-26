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
            <p class="uk-h4">Muted</p>
        </div>
    </div>
    <div>
        <div class="uk-tile uk-tile-primary">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">{{ __('auth.login_title') }}</legend>
                    <p uk-margin>
                        <a class="uk-button uk-button-default" href="#">Google</a>
                        <a class="uk-button uk-button-default" href="#">LinkIn</a>
                    </p>
                    <div class="uk-margin">
                        <input id="login_email" type="email" class="uk-input"
                               placeholder="{{ __('auth.email_placeholder') }}"
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @if ($errors->has('email'))
                            <span><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>

                    <div class="uk-margin">
                        <input id="login_password" type="password" class="uk-input"
                               placeholder="{{ __('auth.password_placeholder') }}"
                               name="password" value="{{ old('password') }}" required autocomplete="new-password">
                        @if ($errors->has('password'))
                            <span><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label>
                            <input class="uk-checkbox" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('auth.remember_me_checkbox') }}
                        </label>
                    </div>
                    <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.login_button') }}</button>
                    @if (Route::has('password.request'))
                        <a class="uk-button uk-button-default"
                           href="{{ route('password.request') }}">{{ __('auth.forgot_your_password_button') }}</a>
                    @endif
                </fieldset>
            </form>


        </div>
    </div>
    <div>
        <div class="uk-tile uk-tile-secondary">
            <form method="POST" action="{{ route('register') }}" uk-grid>
                @csrf
                <fieldset class="uk-fieldset uk-width-1-1">

                    <legend class="uk-legend">{{ __('auth.registration_title') }}</legend>

                    <div class="uk-margin">
                        <input id="name" type="text" class="uk-input" placeholder="{{ __('auth.name_placeholder') }}"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @if ($errors->has('name'))
                            <span><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>

                    <div class="uk-margin">
                        <input id="email" type="email" class="uk-input" placeholder="{{ __('auth.email_placeholder') }}"
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @if ($errors->has('email'))
                            <span><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>


                    <div class="uk-grid">
                        <div class="uk-width-1-4@m">
                            <select class="uk-select">
                                <option></option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                            </select>
                        </div>
                        <div class="uk-width-1-2@m">
                            <select class="uk-select">
                                <option></option>
                                <option>январь</option>
                            </select>
                        </div>
                        <div class="uk-width-1-4@m">
                            <select class="uk-select">
                                <option></option>
                                <option>2002</option>
                            </select>
                        </div>
                    </div>


                    <div class="uk-margin">
                        <input id="password" type="password" class="uk-input"
                               placeholder="{{ __('auth.password_placeholder') }}"
                               name="password" value="{{ old('password') }}" required autocomplete="new-password">
                        @if ($errors->has('password'))
                            <span><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>

                    <div class="uk-margin">
                        <input id="password-confirm" type="password" class="uk-input"
                               placeholder="{{ __('auth.password_confirm_placeholder') }}"
                               name="password_confirmation" value="{{ old('password') }}" required
                               autocomplete="new-password">
                    </div>

                    <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.register_button') }}</button>
                </fieldset>


            </form>
        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
