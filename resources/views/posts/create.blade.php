@extends('layouts.layout')

@section('content')
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('posts.parts.form')
    
    <div class="mb-3">
      <button type="submit" class="btn btn-primary mb-3">Опубликовать</button>
    </div>
</form>
@endsection