<?php include_once("db_connect.php"); ?>
<?php
if((isset($_POST)) && (!empty($_POST))){
  $id = mysqli_real_escape_string($con,$_POST['id']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $sql = "UPDATE admintable SET id = '".$id."',PASSWORD='".$password."' WHERE 1";

  $result = mysqli_query($con, $sql);
  if(isset($result)){
    echo "sucessful";
echo '<br><br><br><center><a href="upload.php" ><h2>  Back  </h2> </a></center>';
  }
else {
  echo "error";
}
}

?>
