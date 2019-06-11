<div class="uk-section uk-section-default uk-section-xsmall uk-section-xsmall">
    <div class="uk-container">

        <h3>{{$user->name}}, 44</h3>

        <div class="uk-grid uk-child-width-1-5@m" uk-grid>
            <div class="uk-text-center uk-padding-remove">
                <a href="{{route('profile.photos')}}"><img data-src="{{route('profile.gallery.image',[$user->mainImage()->image_hash_name,'M'])}}" width="200 px"
                     height="200 px" alt="{{$user->mainImage()->image_hash_name}}" uk-img></a>
            </div>
            @foreach($user->ordinaryImages()->slice(4) as $image)
                <div class="uk-text-center uk-padding-remove">
                    <a href="{{route('profile.photos')}}"><img data-src="{{route('profile.gallery.image',[$image->image_hash_name,'M'])}}" width="200 px"
                         height="200 px" alt="{{$image->image_user_name}}" uk-img></a>
                </div>
            @endforeach
        </div>


    </div>
</div>
<div class="uk-section uk-section-default uk-section-xsmall">
    <div class="uk-container">

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