@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary">Редактировать</a>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Назад к списку</a>
@endsection