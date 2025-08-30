
<div class="form-group">
    <label for="month">Month</label>
    <input id="month" type="text" class="form-control" name="month" value="{{ old('month') ?? $community->month }}">
    <div>{{ $errors->first('month') }}</div>
</div>
<div class="form-group">
    <label for="day">Day</label>
    <input id="day" type="number" class="form-control" name="day" min="1" max="31" step="1" value="{{ old('day') ?? $community->day }}">
    <div>{{ $errors->first('day') }}</div>
</div>
<div class="form-group">
    <label for="program">Program</label>
    <input id="program" type="text" class="form-control" name="program" value="{{ old('program') ?? $community->program }}">
    <div>{{ $errors->first('program') }}</div>
</div>
<div class="form-group">
    <label for="time">Time</label>
    <input id="time" type="text" class="form-control" name="time" value="{{ old('time') ?? $community->time }}">
    <div>{{ $errors->first('time') }}</div>
</div>
<div class="form-group">
    <label for="teacher">Teacher</label>
    <input id="teacher" type="text" class="form-control" name="teacher" value="{{ old('teacher') ?? $community->teacher }}">
    <div>{{ $errors->first('teacher') }}</div>
</div>
<div class="form-group">
    <label for="url">URL</label>
    <input id="url" type="text" class="form-control" name="url" value="{{ old('url') ?? $community->url }}">
    <div>{{ $errors->first('url') }}</div>
</div>
<div class="form-group">
    <label for="button">Button Text</label>
    <input id="button" type="text" class="form-control" name="button" value="{{ old('button') ?? $community->button }}">
    <div>{{ $errors->first('button') }}</div>
</div>

@csrf
