<input id="name" type="text" class="uk-input uk-border-rounded"
       placeholder="{{ __('auth.name_placeholder') }}"
       name="name" value="{{ old('name') }}" required autocomplete="name">
@if ($errors->has('name'))
    <span><strong>{{ $errors->first('name') }}</strong></span>
@endif