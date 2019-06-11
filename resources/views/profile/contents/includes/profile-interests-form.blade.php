<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">
        <h4>Інтереси</h4>
        <div class="uk-grid-small uk-child-width-1-4 uk-text-center" uk-grid>
            <div><div>Інтерес1</div></div>
            <div><div>Інтерес2</div></div>
            <div><div>Інтерес3</div></div>
            <div><div>Інтерес4</div></div>
            <div><div>Інтерес5</div></div>
            <div><div>Інтерес6</div></div>
            <div><div>Інтерес7</div></div>
            <div><div>Інтерес8</div></div>
        </div>
        <form  action="{{route('image.delete')}}" method="POST">
            @csrf

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Інтерес</label>
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
