function validateRegistrationForm(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
  

    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("phoneError").textContent = "";
    document.getElementById("passwordError").textContent = "";
    document.getElementById("confirmPasswordError").textContent = "";
  
    let isValid = true;
  
    if (name.trim() === "") {
      document.getElementById("nameError").textContent = "Please enter your name.";
      isValid = false;
    }
  
    if (!email.includes("@")) {
      document.getElementById("emailError").textContent = "Please enter a valid email address.";
      isValid = false;
    }
  
    if (!/^\d{11}$/.test(phone)) {
      document.getElementById("phoneError").textContent = "Please enter a valid 11-digit phone number.";
      isValid = false;
    }
  
    if (password.length < 8) {
      document.getElementById("passwordError").textContent = "Password should be at least 8 characters long.";
      isValid = false;
    }
  
    if (password !== confirmPassword) {
      document.getElementById("confirmPasswordError").textContent = "Passwords do not match.";
      isValid = false;
    }
  
    if (isValid) {
      alert("Registration successful!");
    }
  }
  
  document.getElementById("registrationForm").addEventListener("submit", validateRegistrationForm);
  