@include('profile.contents.includes.profile-images-form')

<div class="uk-container-expand">
    <div class="uk-grid-divider" uk-grid>
        <div class="uk-width-2-3">
            @include('profile.contents.includes.profile-main-form')
            @include('profile.contents.includes.profile-work-form')
            @include('profile.contents.includes.profile-location-form')
            @include('profile.contents.includes.profile-want-form')
            @include('profile.contents.includes.profile-interests-form')
            @include('profile.contents.includes.profile-personal-info-form')
            @include('profile.contents.includes.profile-languages-form')
        </div>
        <div class="uk-width-1-3">
            @include('profile.contents.includes.profile-right-side')
        </div>
    </div>
</div>