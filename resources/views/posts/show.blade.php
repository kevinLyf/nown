@extends('layouts.main')

@section('title', 'nown - create a post')

@section('content')
    <h1>{{ $post->title  }}</h1>
    <p>{{ $post->description  }}</p>
@endsection
