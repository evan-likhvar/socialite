<div>
    <div class="uk-tile uk-tile-muted">
        <form>{!!$locales!!}</form>
    </div>
    <form id="change-locale" action="{{ route('change-locale') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>