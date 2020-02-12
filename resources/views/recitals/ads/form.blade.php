<div class="form-group">
    <textarea name="information" id="ads-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $ad->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
