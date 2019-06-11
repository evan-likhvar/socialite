<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">
        <h4>Я хочу</h4>
        <form  action="{{route('image.delete')}}" method="POST">
            @csrf
            <div class="">
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input class="uk-radio" type="radio" name="radio1"> Знайти нових друзів</label>
                    <label><input class="uk-radio" type="radio" name="radio1"> Спілкуватися</label>
                    <label><input class="uk-radio" type="radio" name="radio1"> Знайти пару</label>
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
