<form action="{{route('image.delete')}}" method="POST">
    @csrf
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Хто може переглядати мій профіль</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Дозволити іншим ділитися моїм профілем</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Показувати відстань</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Показувати мій онлайн-статус</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Показувати мій профіль лише тим, хто мені подобається та кого я відвідую</div>
        <div class="uk-width-2-5">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox" checked> Mail</label>
                <label><input class="uk-checkbox" type="checkbox"> Browser</label>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-2-5">Дозволити пошук за email-адресою</div>
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
