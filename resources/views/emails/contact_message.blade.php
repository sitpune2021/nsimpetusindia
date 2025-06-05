<p><strong>New Contact Message</strong></p>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] ?? 'No Subject' }}</p>
<p><strong>Message:</strong><br>{{ $data['message'] }}</p>