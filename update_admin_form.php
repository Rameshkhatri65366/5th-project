<!DOCTYPE html>
<html>
	<head>
<style>
html{font-family: Arial, Helvetica, sans-serif;;}
form{
    width: 40%;
    padding: 30px;
  height:fit-content;
    margin:0 auto;
    margin-top: 3%;
    background-color: #f9f9f9
}
.form-control{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button{
  background-color:  #a2b9bc;
  color: black;
  border: none;
  cursor: pointer;
  width: 30%;
  margin: 5px auto;
  padding: 8px;
      box-shadow: 0px 5px 5px #ccc;
      border-radius: 10px;
      border-top: 1px solid #e9e9e9;
  display:block;
  text-align:center;
}
body{
	background-color:  #e8edf7;
}
p {

}
</style>
		<title></title>
	</head>

	<body>


		<form class="admin" action="update_admin.php" method="POST"  class="form-inline">
			<p>CHANGE ADMIN ID AND PASSWORD</p> <br>
		   New ID <input type="text" name="id" class="form-control" placeholder="ID" required><br>
		    New Password<input type="password" name="password" class="form-control" placeholder="password" required><br>
		  <button type="submit"  name="Submit" value="Update" class="btn btn-primary mb-2" >CHANGE</button>
		</form>
	</body>
</html>
