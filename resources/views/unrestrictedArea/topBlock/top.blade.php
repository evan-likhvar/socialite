<div class="uk-section  uk-padding-remove-vertical">
    <div class="uk-container">
        <div class="uk-tile  uk-padding start-page-top">

            <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                <div>
                    <form id="change-l" action="{{ route('change-locale') }}" method="POST">
                        @csrf
                        {!!$locales!!}
                    </form>
                </div>
                <div class="uk-text-center">
                    <h2 class="logo1 ">{{ __('unrestricted-top-block.site_name') }}</h2>
                </div>
                <div>
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                        <div class="uk-inline">
                            <a class="uk-link-text uk-position-center start-page-top-link" href="{{route('encounters')}}">{{ __('unrestricted-top-block.encounters') }}</a>
                        </div>
                        <div class="uk-inline">
                            <a class="uk-link-text uk-position-center start-page-top-link"  href="{{route('encounters')}}">{{ __('unrestricted-top-block.people_nearby') }}</a>
                        </div>
                        <div>
                            <a class="uk-button uk-button-default uk-border-rounded start-page-top-button-text" href="{{ route('login') }}">{{ __('auth.login_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>