

<?php require_once("db_connect.php"); ?>


<?php
///deleting all data before insering new

  $delete_sql = "DELETE FROM `student_result`";

  $result = mysqli_query($con, $delete_sql);


?>
<?php

if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
    echo "<center><h3>Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br></h3></center>";
    //echo "Stored in: " . $_FILES["file"]["tmp_name"];
    $a=$_FILES["file"]["tmp_name"];
	//echo $a;

// path where your CSV file is located
//define('CSV_PATH','C:/xampp/htdocs/');
//<!-- C:\\xampp\\htdocs -->
// Name of your CSV file
    $csv_file = $a;

    if (($getfile = fopen($csv_file, "r")) !== FALSE) {
     $data = fgetcsv($getfile, 1000, ",");
     while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
     //$num = count($data);
	   //echo $num;
        //for ($c=0; $c < $num; $c++) {
        $result = $data;
        $str = implode(",", $result);
        $slice = explode(",", $str);

       // $col1 = $slice[0];
        //$col2 = $slice[1];
        //$col3 = $slice[2];
        //$col4 = $slice[3];

        $reg_no = $slice[0];
        $symbol_no = $slice[1];
        $Name = $slice[2];
        $FACULTY =$slice[3];
        $year = $slice[4];
        $MATHS = $slice[5];
        $MATHS_GRADE = $slice[6];
        $NEPALI = $slice[7];
        $NEPALI_GRADE = $slice[8];
        $FINAL_TOTAL = $slice[9];
        $FINAL_GRADE = $slice[10];

$query =  "INSERT INTO student_result(reg_no, symbol_no, Name, FACULTY, year, MATHS, MATHS_GRADE, NEPALI, NEPALI_GRADE,FINAL_TOTAL, FINAL_GRADE)
VALUES ('".$reg_no."', '".$symbol_no."', '".$Name."', '".$FACULTY."', '".$year."','".$MATHS."', '".$MATHS_GRADE."', '".$NEPALI."', '".$NEPALI_GRADE."','".$FINAL_TOTAL."','".$FINAL_GRADE."')";


//$query = "INSERT INTO persons(id, name, email ,contacts) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";

// $query = "INSERT INTO STUDENT_RESULT(ROLL_NO   , GR_NO  , STD ,CLASS ,  NAME  ,  BIRTHDATE ,  GUJARATI ,   GRADE  , MATHS  , GRADE   NEPALI   GRADE   ENGLISH GRADE   SCIENCE GRADE   SOCIAL_SCIENCE  GRADE   OPTMATH    GRADE   VYAKTITVA_VIKAS GRADE   FINAL_TOTAL FINAL_GRADE
// ) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";


        $s=mysqli_query($con,$query);

    }

}

echo "<script>alert('Record successfully uploaded.');</script>";


echo "<center><h2>File data successfully imported to database!!
</h2><br>
<h3> NOTE : PLEASE DO NOT REFRESH THE PAGE !</h3><br><br>";

echo'<h2><a href="upload.php" class="btn btn-primary mb-2" ><h4>Back </h4></a></h2></center>';





mysqli_close($con);
}
?>
