<div class="form-group">
    <textarea name="information" id="volunteers-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $volunteer->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
