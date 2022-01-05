<?php include("header.php");
include("db_connect.php"); ?>
<?php if ((isset($_POST))) { ?>
      <div class="container">
            <center> <img src="images/logo.png" height="100" width="100" /> </center>
            <center>
                  <h2>First SEMESTER Exam Results-2020 </h2>
            </center>
            <?php
            $get_reg_no = $_POST['reg_no'];
            $get_symbol_no = $_POST['symbol_no'];
            $student_sql = "SELECT * FROM `student_result` where reg_no=" . $get_reg_no . " AND symbol_no=" . $get_symbol_no . " ";
            $student_result = mysqli_query($con, $student_sql);
            $student_r = mysqli_fetch_assoc($student_result);
            if (!isset($student_r)) {
                  echo '<script>alert("Please Enter a Valid data !")</script>';
                  echo ' <br>
			<br>
			<center><a href="index.php" class="btn btn-primary mb-2" ><h2>Try Again ! </h2></a></center>
			';
            }

            if (isset($student_r)) { ?>

                  <h4><b>reg_no: </b><?php echo $student_r['reg_no']; ?> </h4>
                  <h5><b>symbol_no : </b> <?php echo $student_r['symbol_no']; ?>
                        <h5><b>Name: </b> <?php echo $student_r['Name']; ?> </h5>
                        <h5><b>FACULTY : </b> <?php echo $student_r['FACULTY']; ?> </h5>
                        <table class="table table-bordered table-sm">
                              <thead>
                                    <tr>
                                          <th>SUBJECT &nbsp;&nbsp;</th>
                                          <th>TOTAL MARKS&nbsp;&nbsp;</th>
                                          <th>OBTAINED MARKS&nbsp;&nbsp;</th>
                                          <th>GRADE</th>
                                    </tr>
                              </thead>
                              <tbody>

                              <?php     } ?>

                              <?php

                              $get_head_sql = "SELECT * FROM `student_result`";
                              $get_head_sql_result = mysqli_query($con, $get_head_sql);
                              $head_result = mysqli_fetch_assoc($get_head_sql_result);


                              $student_sql = "SELECT * FROM `student_result` where reg_no=" . $get_reg_no . " AND symbol_no=" . $get_symbol_no . "";
                              $student_result = mysqli_query($con, $student_sql);
                              while ($student_r = mysqli_fetch_assoc($student_result)) { ?>
                                    <tr>
                                          <td><?php $i = 0;
                                                $i++;
                                                echo $i; ?></td>
                                          <?php $subject = "MATHS";
                                          $grade = "" . $subject . "_GRADE";
                                          ?>
                                          <td><?php echo $subject; ?></td>
                                          <td><?php echo $head_result[$subject]; ?></td>
                                          <td><?php echo $student_r[$subject]; ?></td>
                                          <td><?php echo $student_r[$grade]; ?></td>
                                    </tr>

                                    <tr>
                                          <td><?php $i++;
                                                echo $i; ?></td>
                                          <?php $subject = "NEPALI";
                                          $grade = "" . $subject . "_GRADE"; ?>
                                          <td><?php echo $subject; ?></td>
                                          <td><?php echo $head_result[$subject]; ?></td>
                                          <td><?php echo $student_r[$subject]; ?></td>
                                          <td><?php echo $student_r[$grade]; ?></td>
                                    </tr>
                                    <tr>
                                          <td>
                                    </tr>

                                    <thead>
                                          <tr>
                                                <th>
                                                      </td>
                                                <th>TOTAL MARKS</th>
                                                <th><?php echo $head_result['FINAL_TOTAL']; ?></th>
                                                <th><?php echo $student_r['FINAL_TOTAL']; ?></th>
                                                <th><?php echo $student_r['FINAL_GRADE']; ?></th>
                                          </tr>



                                    </thead>
                                    <thead>
                                          <th></th>
                                          <th>PERCENTAGE </th>
                                          <th>
                                                <?php

                                                $percentage = ($student_r['FINAL_TOTAL'] / $head_result['FINAL_TOTAL']) * 100;

                                                $percentage =  number_format((float)$percentage, 2, '.', '');



                                                echo $percentage . "%";

                                                ?>
                                          </th>
                                          <th>
                                          </th>
                                          <th></th>
                                    </thead>

                              <?php } ?>


                              </tbody>
                        </table>
      </div>


      </br>
      </br>

      <center><a href="index.php" class="btn btn-primary btn-sm">
                  < back </a>
                        <button type="button" onclick="myFunction()" class="btn btn-secondary btn-sm">PRINT</button>
      </center>

      </div>

<?php } ?>
<script type="text/javascript">
      function myFunction() {
            window.print();
      }
</script>



<?php include("footer.php");     ?>