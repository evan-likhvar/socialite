<div class="uk-section uk-section-default uk-section-xsmall uk-section-xsmall">
    <div class="uk-container">

        <h3>{{$user->name}}, 44</h3>

        <div class="uk-grid uk-child-width-1-3@m" uk-grid>
            @foreach($user->images as $image)
                <div class="uk-text-center">
                    <img data-src="{{route('profile.gallery.image',[$image->image_hash_name,'M'])}}" width="200 px"
                         height="200 px" alt="{{$image->image_user_name}}" uk-img>
                </div>
            @endforeach
        </div>
        <div class="uk-grid uk-child-width-1-3@m" uk-grid>
            <div class="uk-text-center">
                Популярнымть<br>
                пыдвищити
            </div>
            <div class="uk-text-center">
                Популярнымть<br>
                пыдвищити
            </div>
            <div class="uk-text-center">
                Популярнымть<br>
                пыдвищити
            </div>
        </div>
        заповненеисть профилю
        <progress id="js-progressbar" class="uk-progress" value="10" max="100"></progress>

    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Робота і освіта</h4>

        Розкажи іншим про себе - додай інформацію про роботу та освіту


    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Місцезнаходження</h4>

        гнешшнщн


    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Я хочу</h4>

        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>

    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Інтереси</h4>

        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>

    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Особиста інформація</h4>

        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>
        Знайти нових друзів<br>
        Спілкуватися<br>
        Знайти пару<br>

    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

        <h4>Мови</h4>

        гнешшнщн


    </div>
</div>