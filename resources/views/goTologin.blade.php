@extends('Components.Layout')

@section('title', 'Log in')

@section('content')
<main class="login-main">
    <div class="background-blur"></div>
    <div class="login-container">
        <h1>Login</h1>

        <!-- Single Login Form -->
        <form id="loginForm" action="/homepage" method="POST">
            @csrf
            <!-- Username input -->
            <input type="text" name="username" placeholder="Enter your name" value="{{ old('username') }}" required pattern="[A-Za-z]+" title="Only alphabetic characters are allowed.">

            @if ($errors->has('username'))
                <div class="error-message" style="color: red;">
                    {{ $errors->first('username') }}
                </div>
            @endif

            <!-- Age confirmation -->
            <div id="ageConfirmation">
                <label for="birthday">Enter your birthday:</label>
            </div>

            <!-- Birthdate input -->
            <div id="birthdayInput">
                <input type="date" name="birthday" id="birthday" min="1900-01-01" required>
                @if ($errors->has('birthday'))
                    <div class="error-message">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
            </div>

            <!-- Login button -->
            <button type="submit">Login</button>
        </form>
    </div>
</main>
@endsection