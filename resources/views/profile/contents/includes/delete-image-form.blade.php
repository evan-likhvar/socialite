@if($image->main != 1)
    <form action="{{route('image.delete')}}" method="POST">
        @csrf
        <input name="name" value="{{$image->image_hash_name}}" type="hidden">
        <button class="uk-button uk-button-link uk-text-small uk-text-capitalize {{$image->main == 1 ? 'uk-disabled' : ''}}"
                style="font-size: 80%; color: #1e8cdf">Delete
        </button>
    </form>
@endif