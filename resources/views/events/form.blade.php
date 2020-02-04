<div class="form-group">
    <label for="day">Event Date</label>
    <input type="date" class="form-control" name="day" required>
</div>

<div class="form-group">
    <label for="happening">Event</label>
    <input id="happening" type="text" class="form-control" name="happening" value="{{ old('happening') ?? $event->happening }}">
    <div>{{ $errors->first('happening') }}</div>
</div>


@csrf
