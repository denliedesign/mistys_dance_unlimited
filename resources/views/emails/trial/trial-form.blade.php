<strong>Parent Name</strong> {{ $trial['parentName'] }}
<br><strong>Email</strong> {{ $trial['email'] }}
<br><strong>Phone Number</strong> {{ $trial['phone'] }}
<br><strong>Student Name</strong> {{ $trial['studentName'] }}
<br><strong>Birthdate</strong>
{{ \Carbon\Carbon::parse($trial['birthdate'])->format('F j, Y') }}
<br><strong>Preferred Day</strong> {{ $trial['day'] }}
<br><strong>SMS Consent</strong> {{ !empty($trial['sms_consent']) ? 'Yes' : 'No' }}
<br><br>
<strong>**DO NOT REPLY**</strong>
<br>Please compose a new message
