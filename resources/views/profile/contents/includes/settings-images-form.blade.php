<form action="{{route('image.delete')}}" method="POST">
    @csrf
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Ніхто не бачить твої приватні фото</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5 uk-text-right">    <button class="uk-button uk-button-primary uk-text-small uk-text-capitalize">save</button></div>
        <div class="uk-width-3-5"></div>
        <div class="uk-width-1-5"></div>
    </div>
</form>
