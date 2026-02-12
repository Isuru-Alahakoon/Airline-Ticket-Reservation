document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let password = document.getElementById('password').value;
    let confirmpassword = document.getElementById('confirmpassword').value;

    if (password !== confirmpassword) {
        alert("Passwords do not match! Please try again.");
    } else {
        alert("Registration successful!");
    
    }
});
