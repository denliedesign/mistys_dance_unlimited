<div class="form-group">
    <label for="embed">YouTube Embed Code</label>
    <input id="embed" type="text" class="form-control" name="embed">
    <div>{{ $errors->first('embed') }}</div>
</div>


@csrf
