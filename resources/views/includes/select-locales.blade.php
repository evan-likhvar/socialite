<select id="locale-select-list" class="uk-select uk-form-small uk-form-width-xsmall" name="locale" onchange="document.getElementById('change-l').submit();">
    @foreach($locales as $locale)<option {{ app()->getLocale() == $locale ? 'selected' : '' }} value="{{$locale}}">{{$locale}}</option>@endforeach</select>