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
    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
        @foreach($user->images as $image)
            <div>
                <a class="uk-inline" href="{{route('profile.gallery.image',[$image->image_hash_name])}}"
                   data-caption="Caption 1">
                    <img src="{{route('profile.gallery.image',[$image->image_hash_name,'L'])}}" alt="">
                </a>
                <div class="uk-flex uk-flex-center">
                    @if($image->main != 1)
                        <div class="uk-padding-small uk-padding-remove-top">
                            @include('profile.contents.includes.delete-image-form')
                        </div>
                        <div class="uk-padding-small uk-padding-remove-top">
                            @include('profile.contents.includes.set-main-image-form')
                        </div>
                        <div class="uk-padding-small uk-padding-remove-top">
                            @include('profile.contents.includes.toggle-access-image-form')
                        </div>
                    @else
                        Your main image
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>