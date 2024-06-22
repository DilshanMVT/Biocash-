{{-- <!-- In your Blade template file (e.g., resources/views/fingerprint.blade.php) -->
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <button onclick="captureFingerprint()">Capture Fingerprint</button>

    <script>
        async function captureFingerprint() {
            // Use the SDK methods to capture fingerprint data
            // This is a placeholder. Replace with actual SDK call.
            let fingerprintData = await mockCaptureFingerprint();

            // Send the data to the backend
            fetch('/fingerprint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    user_id: 1, // Replace with dynamic user ID
                    fingerprint_data: fingerprintData
                })
            }).then(response => response.json())
              .then(data => console.log(data));
        }

        // Mock function to simulate fingerprint capture
        async function mockCaptureFingerprint() {
            return "sample_fingerprint_data"; // Replace with actual fingerprint data
        }
    </script>
</body>
</html> --}}
