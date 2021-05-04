<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="fest-textarea" name="description" rows="3">{{ old('description') ?? $fest->description }}</textarea>
</div>

@csrf
