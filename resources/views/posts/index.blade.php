@extends('layouts.layout')

@section('content')
    @if (isset($_GET['search']))
    @if (count($posts) > 0)
      <h2>По запросу '<?=$_GET['search']?>' найдено постов: {{ count($posts) }}</h2>
    @else
      <h2>По запросу '<?=$_GET['search']?>' ничего не найдено</h2>
      <a class="btn btn-primary" href="{{ route('post.index') }}">Все посты</a>  
    @endif
    @endif

    <div class="row">
    @foreach ($posts as $post)
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header"><h3>{{ $post->title }}</h3></div>
                <div class="card-body">
                    <div class="card-img mb-2" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-authoe mb-2">{{ $post->name }}</div>
                    <a class="btn btn-outline-primary" href="">Посмотреть пост</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    @if (!isset($_GET['search']))
    {{ $posts->links() }}
    @endif
@endsection
        

