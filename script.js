
    function toggleForms() {
        const signupContainer = document.getElementById('signupContainer');
        const loginContainer = document.getElementById('loginContainer');
        if (signupContainer.style.display === 'none') {
            signupContainer.style.display = 'block';
            loginContainer.style.display = 'none';
        } else {
            signupContainer.style.display = 'none';
            loginContainer.style.display = 'block';
        }
    }
    
    function signup() {
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const country = document.getElementById('country').value.trim(); // Optional
        const city = document.getElementById('city').value.trim(); // Optional
        const password = document.getElementById('password').value.trim();
        const messageDiv = document.getElementById('message');
    
        // Validate required fields
        if (firstName && lastName && email && phone && password) {
            // Success message
            messageDiv.textContent = 'You are registered successfully!';
            messageDiv.style.color = 'green';
            // Here you can add logic to handle successful signup (like saving data)
        } else {
            // Error message
            messageDiv.textContent = 'Error: Please fill in all required fields.';
            messageDiv.style.color = 'red';
        }
    }
    