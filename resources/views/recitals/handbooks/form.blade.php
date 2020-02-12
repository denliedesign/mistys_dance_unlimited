<div class="form-group">
    <textarea name="information" id="handbooks-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $handbook->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
