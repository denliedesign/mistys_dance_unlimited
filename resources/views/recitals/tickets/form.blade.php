<div class="form-group">
    <textarea name="information" id="tickets-textarea" cols="30" rows="10" class="form-control">{{ old('information') ?? $ticket->information }}</textarea>
    <div>{{ $errors->first('information') }}</div>
</div>

@csrf
