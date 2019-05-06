<div class="uk-section uk-section-primary uk-padding-remove-vertical">
    <div class="uk-container">
        <div class="uk-tile uk-tile-primary uk-padding-small">

            <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                <div>
                    <form id="change-l" action="{{ route('change-locale') }}" method="POST">
                        @csrf
                        {!!$locales!!}
                    </form>
                </div>
                <div class="uk-text-center">
                    <h2>{{ __('unrestricted-top-block.site_name') }}</h2>
                </div>
                <div>
                    @guest
                        <a class="uk-dark uk-button uk-button-primary uk-button-small uk-border-rounded"
                           href="#">{{ __('unrestricted-top-block.join') }}</a>
                        {{ __('unrestricted-top-block.or') }}
                        <a class="uk-button uk-button-default uk-button-small uk-border-rounded"
                           href="#">{{ __('auth.login_button') }}</a>
                    @endguest
                    @auth
                        <a class="uk-dark uk-button uk-button-primary uk-button-small uk-border-rounded" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('auth.logout_button') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>

</div>