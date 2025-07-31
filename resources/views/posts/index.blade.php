@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Посты</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Создать</a>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-info btn-sm">Показать</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary btn-sm">Редактировать</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Удалить?')">Удалить</button>
                </form>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection