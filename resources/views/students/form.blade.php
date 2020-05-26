<div class="form-group">
    <label for="name">Student Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $student->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="email">Student Email</label>
    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') ?? $student->email }}">
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label for="ballet">Ballet Level</label>
    <input id="ballet" type="text" class="form-control" name="ballet" value="{{ old('ballet') ?? $student->ballet }}">
    <div>{{ $errors->first('ballet') }}</div>
</div>
<div class="form-group">
    <label for="jazz">Jazz Level</label>
    <input id="jazz" type="text" class="form-control" name="jazz" value="{{ old('jazz') ?? $student->jazz }}">
    <div>{{ $errors->first('jazz') }}</div>
</div>
<div class="form-group">
    <label for="tap">Tap Level</label>
    <input id="tap" type="text" class="form-control" name="tap" value="{{ old('tap') ?? $student->tap }}">
    <div>{{ $errors->first('tap') }}</div>
</div>
<div class="form-group">
    <label for="pointe">Pointe Level</label>
    <input id="pointe" type="text" class="form-control" name="pointe" value="{{ old('pointe') ?? $student->pointe }}">
    <div>{{ $errors->first('pointe') }}</div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') ?? $student->description }}</textarea>
</div>
@csrf
