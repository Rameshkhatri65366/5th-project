<html>
<?php include "header.php"; ?>
<h1>CHECK YOUR RESULT</h1>

<head>
      <style>
            html {
                  font-family: Arial, Helvetica, sans-serif;
                  ;
            }

            form {
                  width: 40%;
                  padding: 50px;
                  height: fit-content;
                  margin: 0 auto;
                  margin-top: fit-content;
                  background-color: #f9f9f9
            }

            .form-control {
                  width: 100%;
                  padding: 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
            }

            button {
                  background-color: #a2b9bc;
                  color: black;
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

            .login-box {
                  align: left;
                  position: left;
                  top: 50%;
                  transform: translateY(-50%);
                  padding: 50px;
                  background-color: #fff;
                  box-shadow: 0px 5px 5px #ccc;
                  border-radius: 10px;
                  border-top: 1px solid #e9e9e9;
            }

            h1 {
                  color: Black;
            }

            h4,
            b,
            h2,
            p {
                  text-align: center;
                  font-size: larger;
            }

            body {
                  background-color: #e8edf7;
            }
      </style>
</head>

<body>
      <form name="my_form" action="view_result.php" method="post">
            <div class="container">
                  <b>Registration number</b><br>
                  <input class="form-control" type="number" name="reg_no" id="reg_no" placeholder="Enter your Registration number"></input><br>
                  <label for="id"><b>Symbol number</b></label>
                  <input type="number" class="form-control" id="symbol_no" name="symbol_no" placeholder="Enter your symbol No" required>
                  <button type="submit" name="submit" value="onsubmit">Submit</button><br>
            </div>
      </form>

</body>

</html>