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
                <a class="btn btn-outline-primary" href="{{ route('post.index') }}">На главную</a>
            </div>
        </div>
    </div>
@endsection