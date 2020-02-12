<div class="form-group">
    <textarea name="information" id="seniors-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $senior->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
