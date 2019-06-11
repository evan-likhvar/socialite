<div class="uk-section uk-section-default uk-section-xsmall uk-section-xsmall">
    <div class="uk-container">
        <h3>{{$user->name}}, 44</h3>
        <div class="uk-grid uk-child-width-1-5@m" uk-grid>
            <div class="uk-text-center uk-padding-remove">
                <a href="{{route('profile.photos')}}"><img
                            data-src="{{route('profile.gallery.image',[$user->mainImage()->image_hash_name,'M'])}}"
                            width="200 px"
                            height="200 px" alt="{{$user->mainImage()->image_hash_name}}" uk-img></a>
            </div>
            @foreach($user->ordinaryImages()->slice(1,4) as $image)

                <div class="uk-text-center uk-padding-remove">
                    <a href="{{route('profile.photos')}}"><img
                                data-src="{{route('profile.gallery.image',[$image->image_hash_name,'M'])}}"
                                width="200 px"
                                height="200 px" alt="{{$image->image_user_name}}" uk-img></a>
                </div>
            @endforeach
        </div>
    </div>
</div>