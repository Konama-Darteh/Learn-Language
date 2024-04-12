<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCA | Register</title>
    <link rel="stylesheet" href="../LearnLanguage/assets/css/register.css">
</head>
<body>
<div class="former">
    <form action="../LearnLanguage/action/register_action.php" method="post" name="signin" id="signin" onsubmit="return validateForm()">

        <div class="form-1">
            <h1>Sign Up</h1>
            <div>
                <input required class="input-1" type="text" name="fname" placeholder="First name">
                <input required class="input-1" type="text" name="lname" placeholder="Last name" id="lname">
            </div>
        </div>
        <div>
            <input required class="input-1" type="email" name="email" placeholder="Email">
            <input required class="input-1" type="tel" name="num" placeholder="Phone Number">
        </div>
        <div class="dob-gender">
            <div class="dob">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="role" name="role">
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="1">Student</option>
                    <option value="0">Admin</option>
                </select>
            </div>


            <div class="gender">
                <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Gender:</p>
                <label for="gender-male">
                    <input type="radio" id="gender-male" name="gender" value="1"> Male</label>
                <label for="gender-female">
                    <input type="radio" id="gender-female" name="gender" value="0"> Female</label>
            </div>
        </div>

        <div class="passwords">
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="password" id="passconfirm" name="passconfirm" placeholder="Confirm Password" required>

        </div>

        <button name="sign-sub" class="submit-bt" type="submit">Sign Up</button>
        <p>Already have an account? <i><a href='login.php' style="text-decoration:none;">Sign In</a></i></p>
    </form>
</div>

      
      <div class="passwords">
        <br>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <br>
        
        <input type="password" id="passconfirm" name="passconfirm" placeholder="Confirm Password" required>
        <br>
      </div>
      
      <button name="sign-sub" class="submit-bt" type="submit">Sign Up</button>
      <p>Already have an account? <i><a href='login.php' style="text-decoration:none;">Sign In</a></i></p>
    </form>
  </div>

  <script>
    function validateForm() {
      // Get form inputs
      var fname = document.forms["signin"]["fname"].value.trim();
      var lname = document.forms["signin"]["lname"].value.trim();
      var mail = document.forms["signin"]["mail"].value.trim();
      var phoneNumber = document.forms["signin"]["num"].value.trim();
      var dob = document.forms["signin"]["dob"].value.trim();
      var gender = document.querySelector('input[name="gender"]:checked');
      var password = document.forms["signin"]["password"].value;
      var passconfirm = document.forms["signin"]["passconfirm"].value;

      // Regular expressions for validation
      var nameRegex = /^[a-zA-Z]+$/;
      var emailRegex = /^\S+@\S+\.\S+$/;
      var phoneRegex = /^[0-9]{10,20}$/;
      var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

      // Validation checks
      if (!fname.match(nameRegex)) {
          alert("Please enter a valid first name.");
          return false;
      }
      if (!lname.match(nameRegex)) {
          alert("Please enter a valid last name.");
          return false;
      }
      if (!mail.match(emailRegex)) {
          alert("Please enter a valid email address.");
          return false;
      }
      if (!phoneNumber.match(phoneRegex)) {
          alert("Please enter a valid phone number.");
          return false;
      }
      if (!dob) {
          alert("Please select your date of birth.");
          return false;
      }
      if (!gender) {
          alert("Please select your gender.");
          return false;
      }
      if (!password.match(passwordRegex)) {
          alert("Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, and one number.");
          return false;
      }
      if (password !== passconfirm) {
          alert("Passwords do not match.");
          return false;
      }

      // Display success message
      alert("Registration successful!");
      return true;
    }
  </script>
</body>
</html>
