<form action="{{ route('start.store') }}" method="POST">
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
    <button type="submit" class="btn btn-lg mt-4 mb-2" style="background: #ED174D; width: 100%; color: white;">Submit Form</button>
    <div class="d-flex justify-content-center">
        <div style="font-size: 18px;" class="text-center text-muted">We will contact you with your next steps.</div>
    </div>
</form>
