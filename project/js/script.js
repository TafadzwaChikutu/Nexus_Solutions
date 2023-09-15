document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Replace these with your actual login credentials
    const validUsername = 'yourUsername';
    const validPassword = 'yourPassword';

    if (username === validUsername && password === validPassword) {
        window.location.href = 'main.html'; // Redirect to the main page
    } else {
        alert('Invalid username or password');
    }
});
