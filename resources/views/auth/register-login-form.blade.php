@extends('auth.layouts.restricted-area.auth')

@section('form_title')
    <div class="uk-tile uk-tile-default uk-padding-small uk-text-center">
        <p class="uk-h5">{{ __('auth.registration_title_register') }}</p>
    </div>
@endsection

@section('form')
    <div>
        <form class="uk-form-horizontal uk-background-default uk-margin-remove " method="POST"
              action="{{ route('register.post') }}" uk-grid>
            @csrf
            <fieldset class="uk-fieldset uk-width-1-1 uk-padding-remove">

                <div class="uk-margin">
                    @include('includes.form-blocks.user-name')
                </div>

                <div class="uk-margin">
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

                <div class="uk-margin">
                    @include('includes.form-blocks.user-location')
                </div>

                <div class="uk-margin">
                    @include('includes.form-blocks.user-gender')
                </div>

                <div class="uk-margin">
                    @include('includes.form-blocks.user-email')
                </div>

                <div class="uk-margin">
                    @include('includes.form-blocks.user-password')
                </div>

                <div class="uk-margin">
                    @include('includes.form-blocks.user-password-confirm')
                </div>

                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"> {{ __('auth.register_button') }}</button>
            </fieldset>
        </form>
        <div class="uk-tile uk-tile-default uk-padding-small uk-text-center">
            {!!  __('auth.registration_polices', ['terms' => route('terms'),'privacy' => route('privacy'),'cookies' => route('privacy')]) !!}
        </div>
    </div>
@endsection