<div class="form-group">
    <textarea name="information" id="generals-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $general->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
