<input id="name" type="text" class="uk-input uk-border-rounded"
       placeholder="{{ __('auth.your_city_placeholder') }}"
       name="user_location" value="{{ old('user_location') }}" required
       autocomplete="user_location">
@if ($errors->has('user_location'))
    <span><strong>{{ $errors->first('user_location') }}</strong></span>
@endif