<!DOCTYPE html>
<html>
<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == "already_exist") {
    echo "<font color='red'><p align='center'>Student id or Reg-no already exist.</p></font>";
  }
}
?>

<head>
  <style>
    html {
      font-family: Arial, Helvetica, sans-serif;
      ;
    }

    body {
      background-color: #e8edf7;
    }

    form {
      width: 40%;
      padding: 35px;
      height: fit-content;
      margin: 0 auto;
      margin-top: 5%;
      background-color: #f9f9f9
    }

    .form-control {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #a2b9bc;
      color: Black;
      border: none;
      cursor: pointer;
      width: 30%;
      margin: 5px auto;
      padding: 8px;
      box-shadow: 0px 5px 5px #ccc;
      border-radius: 10px;
      border-top: 1px solid #e9e9e9;
      display: block;
      text-align: center;
    }

    .signup {
      background-color: blue;
      margin-bottom: 20px;
    }

    .reg {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;

    }

    .login-box {
      align: left;
      position: left;
      top: 50%;
      transform: translateY(-50%);
      padding: 5px;
      background-color: #fff;
      box-shadow: 0px 5px 5px #ccc;
      border-radius: 5px;
      border-top: 1px solid #e9e9e9;
    }

    h2,
    p {
      text-align: center;
    }
  </style>
</head>
<style>
  span {
    color: red;
    display: block;
    margin-left: 10px;
    font-weight: 700;
  }
</style>

<body>
  <form name="myform" action="register.php" method="POST">
    <h2>Register Here</h2>
    <div class="container">
      <b>REGISTRATION NO</b><br>
      <input class="reg" type="text" name="reg_no" id="reg_no" placeholder="Enter your reg no"></input><br>
      <span></span>
      <label for="id"><b>Student ID</b></label>
      <input type="number" class="form-control" name="ID" id="ID" placeholder="Enter new STUDENT ID" required>
      <span></span>
      <label for="name"><b>Password</b></label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <span></span>
      <button type="submit">Register</button>
      <button onclick="goBack()">Go Back</button>

      <script type="text/javascript">
        function goBack() {
          window.location.href = 'index.php?sucess';
        }

        let reg_no = document.getElementById('reg_no');
        let password = document.getElementById('password');
        let ID = document.getElementById('ID');
        let span = document.getElementsByTagName('span');

        reg_no.onkeyup = function() {
          const regex = /^ACME[0-9]{4}$/;
          if (regex.test(reg_no.value)) {
            span[0].innerText = "Your reg number is valid";
            span[0].style.color = 'Green';

          } else {
            span[0].innerText = "**Your reg number is invalid";
            span[0].style.color = 'Red';
          }
        }
        password.onkeyup = function() {
          const regexo = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
          if (regexo.test(password.value)) {
            span[2].innerText = "Your password is valid";
            span[2].style.color = 'Green';

          } else {
            span[2].innerText = "**Your password is invalid";
            span[2].style.color = 'Red';
          }
        }
        ID.onkeyup = function() {
          const regexoo = /^[0-9]{8}$/;
          if (regexoo.test(ID.value)) {
            span[1].innerText = "Your student id is valid";
            span[1].style.color = 'Green';

          } else {
            span[1].innerText = "**Your student id is invalid";
            span[1].style.color = 'Red';
          }
        }
      </script>
    </div>
  </form>
</body>

</html>