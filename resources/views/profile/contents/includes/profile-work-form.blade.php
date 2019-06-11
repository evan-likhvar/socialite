<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Робота і освіта</h4>

        Розкажи іншим про себе - додай інформацію про роботу та освіту

        <form class="uk-form-horizontal uk-margin-large" action="{{route('image.delete')}}" method="POST">
            @csrf
            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Посада</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="dd" type="text" placeholder="Some text...">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="horizontal-text">Назва компанії</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-horizontal" type="text" placeholder="Some text...">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Навчальний заклад</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
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