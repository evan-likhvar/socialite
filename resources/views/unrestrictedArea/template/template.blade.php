@extends('unrestrictedArea.layout.layout')

@if(!empty($navigation))
@section('navigation')
    {!! $navigation !!}
@endsection
@endif
@if(!empty($content))
@section('content')
    {!! $content !!}
@endsection
@endif

