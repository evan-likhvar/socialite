@extends('auth.layouts.unrestricted-area.auth')

@section('form_title')
    <div>
        <h2>{{ __('auth.registration_title_register') }}</h2>
    </div>
@endsection

@section('form')
    <div>
        <form class="uk-form-horizontal" method="POST" action="{{ route('register.post') }}" uk-grid>
            @csrf
            <fieldset class="uk-fieldset uk-width-1-1">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.name') }}</label>
                    <div class="uk-form-controls">
                        @include('includes.form-blocks.user-name')
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
                        @include('includes.form-blocks.user-location')
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-label">{{ __('auth.gender') }}</div>
                    <div class="uk-form-controls uk-form-controls-text">
                        @include('includes.form-blocks.user-gender')
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.email') }}</label>
                    <div class="uk-form-controls">
                        @include('includes.form-blocks.user-email')
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.password') }}</label>
                    <div class="uk-form-controls">
                        @include('includes.form-blocks.user-password')
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">{{ __('auth.password_confirm') }}</label>
                    <div class="uk-form-controls">
                        @include('includes.form-blocks.user-password-confirm')
                    </div>
                </div>

                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.register_button') }}</button>
            </fieldset>
        </form>
        <div class="uk-text-small">
        <br/>{!!  __('auth.registration_polices', ['terms' => route('terms'),'privacy' => route('privacy'),'cookies' => route('privacy')]) !!}
        </div>
    </div>
@endsection