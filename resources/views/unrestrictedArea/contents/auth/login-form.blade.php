@extends('unrestrictedArea.contents.auth.auth')

@section('form_title')
    <div>
        <h2>{{ __('auth.registration_title_login') }}</h2>
    </div>
@endsection


@section('form')
    <div>
        <form class="uk-form-horizontal" method="POST" action="{{ route('login.post') }}" uk-grid>
            @csrf
            <fieldset class="uk-fieldset uk-width-1-1">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.email') }}</label>
                    <div class="uk-form-controls">
                        <input id="email" type="email" class="uk-input uk-border-rounded"
                               placeholder="{{ __('auth.email_placeholder') }}"
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @if ($errors->has('email'))
                            <span><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.password') }}</label>
                    <div class="uk-form-controls">
                        <input id="password" type="password" class="uk-input uk-border-rounded"
                               placeholder="{{ __('auth.password_placeholder') }}"
                               name="password" value="{{ old('password') }}" required
                               autocomplete="new-password">
                        @if ($errors->has('password'))
                            <span><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-label"></div>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('auth.remember_me_checkbox') }}</label>
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-border-rounded"> {{ __('auth.login_button') }}</button>
                <a class="uk-dark uk-button uk-button-default uk-button-small uk-border-rounded"
                   href="{{ route('password.request') }}">{{ __('auth.forgot_your_password_button') }}</a>
            </fieldset>
        </form>

    </div>
@endsection
