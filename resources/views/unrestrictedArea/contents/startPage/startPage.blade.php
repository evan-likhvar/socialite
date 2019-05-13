<div class="uk-container start-page">
    <div class="uk-child-width-1-2@s uk-grid-collapse uk-text-center uk-border-rounded uk-box-shadow-large" uk-grid>
        <div>
            <div class="uk-tile uk-tile-muted uk-border-rounded">
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">{{ __('auth.login_title') }}</legend>

                        <div class="uk-grid uk-padding-small">
                            <div class="uk-width-1-1@m">
                                <div class="uk-flex uk-flex-center">
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.yandex')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.odnoklassniki')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.msn')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.google')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.facebook')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.mail-ru')</div>
                                    <div class="uk-width-1-3 uk-padding-small">@include('includes.svg.vkontakte')</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            @include('includes.form-blocks.user-email')
                        </div>
                        <div class="uk-margin">
                            @include('includes.form-blocks.user-password')
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
            <div class="uk-tile uk-tile-muted uk-border-rounded">
                <form method="POST" action="{{ route('register.post') }}" uk-grid>
                    @csrf
                    <fieldset class="uk-fieldset uk-width-1-1">
                        <legend class="uk-legend">{{ __('auth.registration_title') }}</legend>
                        <div class="uk-margin">
                            @include('includes.form-blocks.user-name')
                        </div>
                        <div class="uk-margin">
                            @include('includes.form-blocks.user-email')
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
                            @include('includes.form-blocks.user-password')
                        </div>
                        <div class="uk-margin">
                            @include('includes.form-blocks.user-password-confirm')
                        </div>
                        <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.register_button') }}</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>