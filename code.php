<?php
include 'db_connect.php';
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM tbl_uploads WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
    ?>
		<script>
	  alert('successfully deleted');
	        window.location.href='upload.php?success';
	        </script>
<?php

   }
    else
    {
    echo "Error in deletion";
    }
}
?>
