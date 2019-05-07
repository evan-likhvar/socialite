@extends('unrestrictedArea.contents.auth.auth')

@section('form_title')
    <div>
        <h2>{{ __('auth.request_token_title') }}</h2>
    </div>
@endsection


@section('form')
    <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @else
            <form class="uk-form-horizontal" method="POST" action="{{ route('password.email') }}" uk-grid>
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

                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-border-rounded"> {{ __('auth.request_token_button') }}</button>

                </fieldset>
            </form>
        @endif

    </div>
@endsection
