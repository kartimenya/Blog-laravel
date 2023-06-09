@extends('layouts.layout')

@section('content')
    <div class="">
        <div class="card mb-3">
            <div class="card-header"><h3>{{ $post->title }}</h3></div>
            <div class="card-body">
                <div class="card-img card-img__max mb-2" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                <div class="card-authoe mb-2">Автор: {{ $post->name }}</div>
                <div class="card-data mb-2">{{ $post->descr }}</div>
                <div class="card-data mb-2">Пост создан: {{ $post->created_at->diffForHumans() }}</div>
                <div class="card-btns">
                    <a class="btn btn-outline-primary" href="{{ route('posts.index') }}">На главную</a>
                    @auth
                        @if (Auth::user()->id == $post->author_id)
                            <a class="btn btn-outline-warning" href="{{ route('posts.edit', ['id' => $post->post_id]) }}">Редактировать</a>
                            <form action="{{ route('posts.destroy', ['id' => $post->post_id]) }}" method="POST" onsubmit="return confirm('Удалить пост?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Удалить</button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection