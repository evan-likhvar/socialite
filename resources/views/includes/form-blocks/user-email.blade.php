<input id="email" type="email" class="uk-input uk-border-rounded"
       placeholder="{{ __('auth.email_placeholder') }}"
       name="email" value="{{ old('email') }}" required autocomplete="email">
@if ($errors->has('email'))
    <span><strong>{{ $errors->first('email') }}</strong></span>
@endif