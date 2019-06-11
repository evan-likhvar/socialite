<form action="{{route('image.delete')}}" method="POST">
    @csrf
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Name</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-name')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">DOB</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-location')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">Gender</div>
        <div class="uk-width-3-5">@include('includes.form-blocks.user-gender')</div>
        <div class="uk-width-1-5"></div>
    </div>
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5 uk-text-right">    <button class="uk-button uk-button-primary uk-text-small uk-text-capitalize">save</button></div>
        <div class="uk-width-3-5"></div>
        <div class="uk-width-1-5"></div>
    </div>
</form>
