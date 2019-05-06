<div class="uk-container">
    <div class="uk-tile uk-tile-default" uk-height-viewport="expand: true">
        <div class="uk-grid-match uk-child-width-expand@s" uk-grid>
            <div class="uk-width-expand@m">
                @yield('form_title')
            </div>
            <div class="uk-width-auto@m">
                <div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div>
                </div>
            </div>

        </div>

        <div class="uk-grid-match uk-child-width-expand@s" uk-grid>

            <div class="uk-width-expand@m">

                @yield('form')

            </div>
            @if(Route::currentRouteName() != 'password.request')

                <div class="uk-width-auto@m uk-padding-remove">
                    <div>
                        <div class="sign-or">
                            <span class="sign-or_">{{ __('unrestricted-top-block.or') }}</span>
                        </div>
                    </div>
                </div>
            @else
                <div class="uk-width-1-4@m"></div>
            @endif

            <div class="uk-width-1-4@m uk-padding-remove">
                <div>
                    @if(Route::currentRouteName() != 'password.request')

                        <p uk-margin>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Facebook</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Vkontakte</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Mail.ru</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Google</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">MSN</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Одноклпсники</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">Яндекс</a><br/>
                            <a class="uk-button uk-button-default uk-border-rounded" href="#">LinkId</a>

                        </p>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .sign-or {
        position: relative;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        min-width: 100px;
        padding: 0 20px;
        height: 100%;
    }

    .sign-or::before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        box-sizing: border-box;
        width: 50%;
        content: '';
        border-right: 1px solid #d4d5d6;
    }

    .sign-or_ {
        position: relative;
        display: inline-block;
        width: 100%;
        padding: 10px 0;
        background: #fff;
        text-align: center;
        font-size: 1.142em;
    }

</style>