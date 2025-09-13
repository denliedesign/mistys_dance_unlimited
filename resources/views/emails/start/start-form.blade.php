<strong>Parent Name</strong> {{ $start['parentName'] }}
<br><strong>Email</strong> {{ $start['email'] }}
<br><strong>Phone Number</strong> {{ $start['phone'] }}
<br><strong>Student Name</strong> {{ $start['studentName'] }}
<br><strong>Birthdate</strong>
{{ \Carbon\Carbon::parse($start['birthdate'])->format('F j, Y') }}
<br><strong>SMS Consent</strong> {{ !empty($start['sms_consent']) ? 'Yes' : 'No' }}
<br><br>
<strong>**DO NOT REPLY**</strong>
<br>Please compose a new message
