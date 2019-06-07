<form action="{{route('image.set.main')}}" method="POST">
    @csrf
    <input name="name" value="{{$image->image_hash_name}}" type="hidden">
    <button class="uk-button uk-button-link">Delete</button>
</form>