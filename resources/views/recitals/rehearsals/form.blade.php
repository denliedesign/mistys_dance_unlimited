<div class="form-group">
    <textarea name="information" id="rehearsals-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $rehearsal->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
