<!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register- Task Management System</title>
    <link rel="stylesheet" href="../css/Register.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>
  </head>
  <body>
    <div class="login-container">
      <div class="logo-info">
        <img class="logo" src="../images/logo_transparent.png" alt="">
        <span class="logo-text">GYM STACK</span>
      </div>
      <h2 id="welcome-back">Register Here</h2>

      <p class="error-msg" id="error-msg"></p>
     

      <form class="form-background" method="POST" onsubmit="validateForm(event)" id="register-form" name="register-form" >
          <input type="text" id="fname" name="fname" placeholder="Enter First Name" required />

          <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required />

          <input type="email" id="email" name="email" placeholder="Email Address" required />

          <input type="password" id="password" name="password" placeholder="Password" required />

          <input type="password" id="confirmpassword" name="confirmPassword" placeholder="Confirm Password" required />

          <input type="text" class="form-control" id="gymname" placeholder="Gym Name">

          <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number">
                  <select id="role" class="form-select" name="role" title="role">
                    <option name="role"value=0>Role</option>
                    <option name="role" value=1>Manager</option>
                    <option name="role" value=2>Customer</option>
                  </select>
            <button type="submit" name="sign-in" id="sign-in">Sign Up</button>

      </form>
    </div>
    

    <script>
        function validateForm(event) {
            event.preventDefault();

            const fname = document.getElementById('fname').value;
            const lname = document.getElementById('lname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmpassword').value;
            const phoneNumber = document.getElementById('phoneNumber').value;


            const nameRegex = /^[A-Za-z\s]+$/;
          const phoneRegex = /^(\+\d{1,4}\s?)?\d{6,14}$/;

           //const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
           const errorMessagesContainer = document.getElementById('error-msg');
           errorMessagesContainer.innerHTML = "";

           const errorMessages = [];

            if (!validator.matches(fname, nameRegex)) {
              errorMessages.push('Invalid First Name')
             
                }
            
             if (!validator.matches(lname, nameRegex)) {
                 errorMessages.push('Invalid Last Name')
                  alert('Invalid Last Name');
                 
                }
        
             if (!validator.matches(phoneNumber, phoneRegex)) {
                errorMessages.push('Invalid Phone Number')
                alert('Invalid Phone Number');
               
            }

          
            if (!validator.isEmail(email)) {
                errorMessages.push('Invalid Email Address')
                alert('Invalid email address');
             
            }

          
            if (!validator.isLength(password, { min: 6 })) {
               errorMessages.push('Password must be at least 6 characters long');
                alert('Password must be at least 6 characters long');
               
            }

            if (!validator.equals(password, confirmPassword)) {
                errorMessages.push('Passwords do not match')
                alert('Passwords do not match');
            }

            if (errorMessages.length > 0) {
                errorMessagesContainer.innerHTML = errorMessages.join('<br>');
            } else {
                errorMessagesContainer.innerHTML = ''; 
                alert('Registration successful!');
                window.location.href = "../login/loginpage.php";

            }
        }

      </script>
    </body>



</html>
