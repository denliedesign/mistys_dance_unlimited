<div class="form-group">
    <label for="title">Title</label>
    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $update->title }}">
    <div>{{ $errors->first('title') }}</div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="update-textarea" name="description" rows="3">{{ old('description') ?? $update->description }}</textarea>
</div>

@csrf
