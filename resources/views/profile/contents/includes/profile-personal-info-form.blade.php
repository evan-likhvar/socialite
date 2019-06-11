<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">
        <h4>Особиста інформація</h4>

        <form class="uk-form-horizontal" action="{{route('image.delete')}}" method="POST">
            @csrf
            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Про мене</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Сімейний стан</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Складні стосунки</option>
                        <option>Вільний</option>
                        <option>Зайнятий</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Орієнтація</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Бісексуал</option>
                        <option>Гей</option>
                        <option>Запитай мене</option>
                        <option>Гетеро</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Зріст</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Вага</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                        <option>100</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Статура</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Атлетична</option>
                        <option>Середня</option>
                        <option>Кілька зайвих кілограмів</option>
                        <option>Спортивна</option>
                        <option>Велика і гарна людина</option>
                        <option>Струнке тіло</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Колір очей</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Чорні</option>
                        <option>Блакитні</option>
                        <option>Карі</option>
                        <option>Зелені</option>
                        <option>Сірі</option>
                        <option>Світло-карі</option>
                        <option>Інші</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Колір волосся</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Чорне волосся</option>
                        <option>Світле волосся</option>
                        <option>Каштанове волосся</option>
                        <option>Фарбоване волосся</option>
                        <option>Сиве волосся</option>
                        <option>Руде волосся</option>
                        <option>Поголене волосся</option>
                        <option>Біле волосся</option>
                        <option>Без волосся</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Проживання</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Сам</option>
                        <option>У гуртожитку</option>
                        <option>З батьками</option>
                        <option>З іншою половинкою</option>
                        <option>З сусідом по квартирі</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Діти</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Маю, вже дорослі</option>
                        <option>Вже маю</option>
                        <option>Ні, ніколи</option>
                        <option>Коли-небудь</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Паління</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>Запеклий курець</option>
                        <option>Проти паління</option>
                        <option>Не палю</option>
                        <option>Палю у товаристві</option>
                        <option>Іноді палю</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-select">Алкоголь</label>
                <div class="uk-form-controls">
                    <select class="uk-select" id="form-horizontal-select">
                        <option>Не вказувати</option>
                        <option>П'ю у товаристві</option>
                        <option>Не п'ю</option>
                        <option>Проти вживання алкоголю</option>
                        <option>П'ю часто</option>
                    </select>
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
