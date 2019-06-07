<div class="uk-container">
    <div class="uk-section uk-padding-small">
        <div class="uk-container">

            <div class="js-upload uk-placeholder uk-text-center">
                <div id="js-mes"></div>
                <span uk-icon="icon: cloud-upload"></span>
                <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                <div uk-form-custom>
                    <input type="file" multiple>
                    <a class="uk-button uk-button-default" href="{{route('image.upload')}}">selecting</a>
                </div>
            </div>

            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

        </div>
    </div>
    <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: slide">
        @foreach($user->images as $image)
            <div>
                <a class="uk-inline" href="{{route('profile.gallery.image',[$image->image_hash_name])}}" data-caption="Caption 1">
                    <img src="{{route('profile.gallery.image',[$image->image_hash_name,'L'])}}" alt="">
                </a>
                <span>@include('profile.contents.includes.delete-image-form')
                    Span for image's actions</span>
            </div>
        @endforeach
    </div>
</div>