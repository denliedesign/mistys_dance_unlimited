<h1>Your First Class Free</h1>

<form action="{{ route('trial.store') }}" method="POST">
    <div class="form-group">
        <label for="parentName">Parent Name</label>
        <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
        <div>{{ $errors->first('parentName') }}</div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
        <div>{{ $errors->first('email') }}</div>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
        <div>{{ $errors->first('phone') }}</div>
    </div>

    <div class="form-group">
        <label for="studentName">Student Name</label>
        <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
        <div>{{ $errors->first('studentName') }}</div>
    </div>

    <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="date" class="form-control" name="birthdate" id="birthdate" required>
        <div>{{ $errors->first('birthdate') }}</div>
    </div>

    <!-- Preferred Day (checkboxes) -->
    <div class="form-group" id="day">
        <label class="d-block">Preferred Day</label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="day_m" name="day[]" value="M" {{ in_array('M', old('day', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="day_m">M</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="day_t" name="day[]" value="T" {{ in_array('T', old('day', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="day_t">T</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="day_w" name="day[]" value="W" {{ in_array('W', old('day', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="day_w">W</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="day_th" name="day[]" value="TH" {{ in_array('TH', old('day', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="day_th">TH</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="day_f" name="day[]" value="F" {{ in_array('F', old('day', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="day_f">F</label>
        </div>

        <div class="mt-1">{{ $errors->first('day') }}</div>
    </div>

    <!-- SMS consent -->
    <div class="form-group form-check mt-3">
        <input class="form-check-input" type="checkbox" id="sms_consent" name="sms_consent" value="1" {{ old('sms_consent') ? 'checked' : '' }} required>
        <label class="form-check-label" for="sms_consent">
            By submitting this form, you agree to receive text
            messages from Mistys Dance Unlimited.
        </label>
        <div>{{ $errors->first('sms_consent') }}</div>
    </div>

    @csrf
    <button type="submit" class="btn btn-primary">Claim Offer</button>
</form>
