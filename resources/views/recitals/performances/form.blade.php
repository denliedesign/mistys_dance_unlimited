<div class="form-group">
    <textarea name="information" id="performances-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $performance->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
