
    function validateForm() {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const address = document.getElementById('address').value.trim();
        const gender = document.getElementById('gender').value;
        const number = document.getElementById('number').value.trim();
        const message = document.getElementById('message').value.trim();

        // Name validation: ensure only alphabetic characters and spaces are used
        const namePattern = /^[a-zA-Z\s]+$/;
        if (!namePattern.test(name)) {
            alert('Please enter a valid name (letters and spaces only).');
            return false;
        }

        // Email validation: ensure a proper email format
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        // Gender validation: ensure a gender is selected
        if (gender === '') {
            alert('Please select your gender.');
            return false;
        }

        // Phone number validation: ensure exactly 10 digits
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(number)) {
            alert('Please enter a valid 10-digit phone number.');
            return false;
        }

        // Address validation: ensure the address is not empty
        if (address === '') {
            alert('Please enter your address.');
            return false;
        }

        // Message validation: ensure the message is not empty
        if (message === '') {
            alert('Please enter a message.');
            return false;
        }

        // If all validations pass, store the name in localStorage
        localStorage.setItem('submittedName', name);

        // Redirect to the home page after a short delay to simulate form submission
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 100);

        return false; // Prevent the actual form submission
    }
