<div class="form-group">
    <textarea name="information" id="photos-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $photo->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
