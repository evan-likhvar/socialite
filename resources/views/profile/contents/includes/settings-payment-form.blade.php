<form action="{{route('image.delete')}}" method="POST">
    @csrf
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Поточний баланс</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                У тебе 0 кредитів.
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5"> Premium</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                Не активовано
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Платіжний метод</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                Дійсний платіжний метод дає змогу отримати доступ до всіх преміум-функцій одним натисканням.
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
