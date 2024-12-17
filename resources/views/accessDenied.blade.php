<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="denied-site">
        <div class="denied-content">
            <i class="fa-solid fa-user-lock"></i>
            <h1>Access Denied</h1>
            <p>You must be 18 years old or older to access this page.</p>

            <!-- Back button to redirect to login page -->
            <button onclick="window.location.href="{{ url('goTologin') }}">Back to Login</button>
        </div>
    </main>
</body>
</html>