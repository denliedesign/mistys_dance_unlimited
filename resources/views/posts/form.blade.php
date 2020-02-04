
<div class="form-group">
    <label for="title">Post Title</label>
    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $post->title }}">
    <div>{{ $errors->first('title') }}</div>
</div>
<div class="form-group">
    <label for="content">Post Content</label>
    <textarea name="content" id="post-textarea" cols="30" rows="10" class="form-control">{{ old('content') ?? $post->content }}</textarea>
    <div>{{ $errors->first('content') }}</div>
</div>

<div class="form-group">
    <label for="shown">Publish Date</label>
    <input type="date" class="form-control" name="shown" required>
</div>

<div class="form-group">
    <label for="image">Post Image</label>
    <input type="file" class="form-control-file" name="image">
    <div>{{ $errors->first('image') }}</div>
</div>


@csrf
