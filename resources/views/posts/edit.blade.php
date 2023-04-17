@extends('layouts.layout')

@section('content')
<form action="{{ route('posts.update', ['id' => $post->post_id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('posts.parts.form')

    <div class="mb-3">
      <button type="submit" class="btn btn-primary mb-3">Редактировать</button>
  </div>
</form>
@endsection