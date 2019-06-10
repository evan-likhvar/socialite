@if($image->main != 1)
    @if($image->public == 1 or $image->public == 0)
        <form action="{{route('image.toggle.access')}}" method="POST">
            @csrf
            <input name="name" value="{{$image->image_hash_name}}" type="hidden">
            <button class="uk-button uk-button-link uk-text-small uk-text-capitalize"
                    style="font-size: 80%; color: #1e8cdf">
                @if($image->public == 1)
                    set as private
                @else
                    set as public
                @endif
            </button>
        </form>
    @endif
@endif