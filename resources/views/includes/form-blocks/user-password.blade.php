<input id="password" type="password" class="uk-input uk-border-rounded"
       placeholder="{{ __('auth.password_placeholder') }}"
       name="password" value="{{ old('password') }}" required
       autocomplete="new-password">
@if ($errors->has('password'))
    <span><strong>{{ $errors->first('password') }}</strong></span>
@endif