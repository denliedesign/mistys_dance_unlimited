
<div class="form-group">
    <label for="title">Post Title</label>
    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $post->title }}">
    <div>{{ $errors->first('title') }}</div>
</div>
<div class="form-group">
    <label for="content">Post Content</label>
    <textarea name="content" cols="30" rows="10" class="form-control">{{ old('content') ?? $post->content }}</textarea>
    <div>{{ $errors->first('content') }}</div>
</div>

{{--id="post-textarea"--}}

<div class="form-group">
    <label for="shown">Publish Date</label>
    <input type="date" class="form-control" name="shown" value="{{ old('shown') ?? $post->shown ? $post->shown->format('Y-m-d') : '' }}" required>
</div>

<div class="form-group">
    <label for="image">Post Image</label>
    <input type="file" class="form-control-file" name="image">
    <div>{{ $errors->first('image') }}</div>
</div>

<div class="form-group">
    <label for="image_name">Edit Image Name</label>
    <input id="image_name" type="text" class="form-control" name="image_name" value="{{ old('image_name') ?? ($post->image ? basename($post->image) : '') }}">
    <div>{{ $errors->first('image_name') }}</div>
    <small class="form-text text-muted">If you're uploading a new image, this name will be replaced.</small>
</div>

@csrf
