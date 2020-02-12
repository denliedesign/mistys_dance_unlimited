<div class="form-group">
    <textarea name="information" id="memories-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $memory->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
