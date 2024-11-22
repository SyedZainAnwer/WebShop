//Register Form Validation

document.getElementById("registrationForm")?.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting

    // Input
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");

    // Error messages
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");
    const confirmPasswordError = document.getElementById("confirmPasswordError");

    let isValid = true;

    // Reset error messages and styles
    usernameError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    // Username 
    if (username.value.length < 5 || !/[A-Z]/.test(username.value) || !/[a-z]/.test(username.value)) {
        isValid = false;
        usernameError.textContent = "Username must be at least 5 characters long and include both uppercase and lowercase letters.";
        username.classList.add("error");
    } else {
        username.classList.remove("error");
        username.classList.add("success");
    }

    // Password 
    if (password.value.length < 10) {
        isValid = false;
        passwordError.textContent = "Password must be at least 10 characters long.";
        password.classList.add("error");
    } else {
        password.classList.remove("error");
        password.classList.add("success");
    }

    // Confirm password 
    if (confirmPassword.value !== password.value) {
        isValid = false;
        confirmPasswordError.textContent = "Passwords do not match.";
        confirmPassword.classList.add("error");
    } else {
        confirmPassword.classList.remove("error");
        confirmPassword.classList.add("success");
    }

    // If valid, proceed
    if (isValid) {
        alert("Awesome Sauce! You're all set!");
    }
});




// Login Form Validation

document.getElementById("loginForm")?.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting

    // Input
    const username = document.getElementById("username");
    const password = document.getElementById("password");

    // Error messages
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");

    let isValid = true;

    // Reset error messages and styles
    usernameError.textContent = "";
    passwordError.textContent = "";

    // Username Validation (Login)
    if (username.value.trim() === "" || username.value.length < 5 || !/[A-Z]/.test(username.value) || !/[a-z]/.test(username.value)) {
        isValid = false;
        usernameError.textContent = "Username is required.";
        username.classList.add("error");
    } else {
        username.classList.remove("error");
        username.classList.add("success");
    }

    // Password Validation (Login)
    if (password.value.trim() === "" || password.value.length < 10) {
        isValid = false;
        passwordError.textContent = "Password is required.";
        password.classList.add("error");
    } else {
        password.classList.remove("error");
        password.classList.add("success");
    }

    if (isValid) {
        alert("Awesome Sauce! You're all set!");
    }
});