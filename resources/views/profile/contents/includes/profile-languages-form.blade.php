<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">
        <h4>Мови</h4>
        <div class="uk-grid-small uk-child-width-1-4 uk-text-center" uk-grid>
            <div><div>Українська</div></div>
        </div>
        <form  action="{{route('image.delete')}}" method="POST">
            @csrf
            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Додати мову</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="dd" type="text" placeholder="Some text...">
                </div>
            </div>
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-5 uk-text-right">    <button class="uk-button uk-button-primary uk-text-small uk-text-capitalize">save</button></div>
                <div class="uk-width-3-5"></div>
                <div class="uk-width-1-5"></div>
            </div>
            <hr>
        </form>
    </div>
</div>
