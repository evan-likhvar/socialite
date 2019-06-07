<div class="uk-container">
    <div class="uk-child-width-1-3@s" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                <h3 class="uk-card-title">Small</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                <h3 class="uk-card-title">Large</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <div class="uk-h3">Slide</div>
    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
        @foreach($user->images as $image)
            <div>
                <a class="uk-inline" href="{{route('profile.gallery.image',[$image->image_hash_name])}}" data-caption="Caption 1">
                    <img src="{{route('profile.gallery.image',[$image->image_hash_name])}}" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>