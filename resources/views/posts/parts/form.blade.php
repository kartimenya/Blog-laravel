<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Название поста</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Введите имя поста" value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Текст поста</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="descr" placeholder="Введите текст поста" rows="3">{{ old('descr') ?? $post->descr ?? '' }}</textarea>
</div>
<div class="mb-3">
  <input type="file" name="img">
</div>