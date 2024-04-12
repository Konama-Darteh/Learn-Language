function checkUserData() {
    // Get form inputs
    var email = document.getElementById('info-1').value;
    var password = document.getElementById('info-2').value;
  
    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    // Validation checks
    if (!email.match(emailRegex)) {
      alert("Please enter a valid email address.");
      return false;
    }
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
    }
  
    // If all validations pass, the form is submitted
    return true;
  }
  
    