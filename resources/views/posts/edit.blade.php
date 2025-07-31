@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Редактировать пост</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}">
            @error('title') <div class="text-danger mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea id="content" name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
            @error('content') <div class="text-danger mt-1">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Обновить</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@endsection
