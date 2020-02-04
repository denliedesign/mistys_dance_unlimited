
<div class="form-group">
    <label for="name">Promotion Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $promotion->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="description">Promotion Description</label>
    <textarea name="description" id="mytextarea" cols="30" rows="10" class="form-control">{{ old('description') ?? $promotion->description }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

<div class="form-group">
    <label for="image">Promotion Image</label>
    <input type="file" class="form-control-file" name="image">
    <div>{{ $errors->first('image') }}</div>
</div>


@csrf
