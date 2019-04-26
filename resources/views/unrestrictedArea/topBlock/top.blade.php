<div>
    <div class="uk-tile uk-tile-muted">
        <form id="change-l" action="{{ route('change-locale') }}" method="POST">
            @csrf
            {!!$locales!!}
        </form>
    </div>
</div>