@extends('unrestrictedArea.contents.auth.auth')

@section('form_title')
    <div>
        <h2>{{ __('auth.registration_title_register') }}</h2>
    </div>
@endsection


@section('form')
    <div>
        <form class="uk-form-horizontal" method="POST" action="{{ route('register') }}" uk-grid>
            @csrf
            <fieldset class="uk-fieldset uk-width-1-1">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.name') }}</label>
                    <div class="uk-form-controls">
                        <input id="name" type="text" class="uk-input uk-border-rounded"
                               placeholder="{{ __('auth.name_placeholder') }}"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @if ($errors->has('name'))
                            <span><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.DoB') }}</label>
                    <div class="uk-form-controls">
                        <div class="uk-grid">
                            <div class="uk-width-1-4@m">
                                <select class="uk-select uk-border-rounded">
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
                            <div class="uk-width-1-2@m uk-padding-remove">
                                <select class="uk-select uk-border-rounded">
                                    <option></option>
                                    <option>январь</option>
                                </select>
                            </div>
                            <div class="uk-width-1-4@m uk-padding-remove">
                                <select class="uk-select uk-border-rounded">
                                    <option></option>
                                    <option>2002</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.your_city') }}</label>
                    <div class="uk-form-controls">
                        <input id="name" type="text" class="uk-input uk-border-rounded"
                               placeholder="{{ __('auth.your_city_placeholder') }}"
                               name="user_location" value="{{ old('user_location') }}" required autocomplete="user_location">
                        @if ($errors->has('user_location'))
                            <span><strong>{{ $errors->first('user_location') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-label">{{ __('auth.gender') }}</div>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input class="uk-radio" type="radio" name="radio1"> {{ __('auth.gender_male') }}</label>
                        <label><input class="uk-radio" type="radio" name="radio1">{{ __('auth.gender_female') }}</label>
                    </div>
                </div>


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
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.password_confirm') }}</label>
                    <div class="uk-form-controls">
                        <input id="password-confirm" type="password" class="uk-input uk-border-rounded"
                               placeholder="{{ __('auth.password_confirm_placeholder') }}"
                               name="password_confirmation" value="{{ old('password') }}" required
                               autocomplete="new-password">
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.register_button') }}</button>
            </fieldset>
        </form>
        <br/><br/>{!!  __('auth.registration_polices', ['terms' => route('terms'),'privacy' => route('privacy'),'cookies' => route('privacy')]) !!}

    </div>
@endsection