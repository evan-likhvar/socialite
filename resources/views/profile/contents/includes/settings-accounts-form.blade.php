<form action="{{route('image.delete')}}" method="POST">
    @csrf
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Email</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-email')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Old password</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-password')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">New password</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-password')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Confirm password</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-password-confirm')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5 uk-text-right">    <button class="uk-button uk-button-primary uk-text-small uk-text-capitalize">save</button></div>
        <div class="uk-width-3-5"></div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Linked</div>
        <div class="uk-width-3-5">
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-4-5">Google account</div>
                        <div class="uk-width-1-5"><button class="uk-button uk-button-default uk-text-small uk-text-capitalize">Link</button></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-4-5">Facebook account</div>
                        <div class="uk-width-1-5"><button class="uk-button uk-button-default uk-text-small uk-text-capitalize">Link</button></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-4-5">Twitter account</div>
                        <div class="uk-width-1-5"><button class="uk-button uk-button-default uk-text-small uk-text-capitalize">Link</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-5"></div>
    </div>
</form>
