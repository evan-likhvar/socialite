@extends('profile.layout.layout')


@if(!empty($leftSide))
@section('leftSide')
    {!! $leftSide !!}
@endsection
@endif

@if(!empty($content))
@section('content')
    {!! $content !!}
@endsection
@endif
@if(!empty($bottom))
@section('bottom')
    {!! $bottom !!}
@endsection
@endif

