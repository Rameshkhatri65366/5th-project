<?php include("header.php"); ?>
<?php include_once 'db_connect.php'; ?>
<html>

<body>

      <link rel="stylesheet" href="viewtable.css">
      <?php
      if (isset($_POST['btn_submit'])) {
            $faculty = $_POST['faculty'];
            $semester = $_POST['semester'];

      ?>
            <?php
            $sql =  "SELECT * FROM `routine` where faculty = '" . $_POST['faculty'] . "' and semester='" . $_POST['semester'] . "' ";
            $result_set = mysqli_query($con, $sql) or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($result_set)) { ?>

                  <table border="1">
                        <tbody>
                              <tr>
                                    <td colspan="10" style="text-align: center; vertical-align: middle;">
                                          <b>FACULTY: <?php echo $row['FACULTY'] ?></b>
                                    </td>

                              </tr>
                              <tr>
                                    <td colspan="10" style="text-align: center; vertical-align: middle;">
                                          <b> SEMESTER: <?php echo $row['SEMESTER'] ?></b>
                                    </td>
                              </tr>
                              <tr>
                                    <td colspan="4" style="text-align: center; vertical-align: middle;"><b>Date</b></td>
                                    <td colspan="6" style="text-align: center; vertical-align: middle;"><b>Subject</b></td>
                              </tr>
                              <tr>
                                    <td colspan="4"><?php echo $row['DATE-1'] ?></td>
                                    <td colspan="6"><?php echo $row['SUBJECT-1'] ?></td>
                              </tr>
                              <tr>
                                    <td colspan="4"><?php echo $row['DATE-2'] ?></td>
                                    <td colspan="6"><?php echo $row['SUBJECT-2'] ?></td>
                              </tr>
                              <tr>
                                    <td colspan="4"><?php echo $row['DATE-3'] ?></td>
                                    <td colspan="6"><?php echo $row['SUBJECT-3'] ?></td>
                              </tr>
                              <tr>
                                    <td colspan="4" style="padding: 20px;"><?php echo $row['DATE-4']
                                                                              ?></td>
                                    <td colspan="6" style="padding: 20px;"><?php echo $row['SUBJECT-4']
                                                                              ?></td>
                              </tr>
                              <tr>
                          <td colspan="4" style="padding: 20px;"><?php echo $row['DATE-5']
                                                                              ?></td>
                                    <td colspan="6" style="padding: 20px;"><?php echo $row['SUBJECT-6']?></td>
                              </tr>
                              <tr>
                                    <td colspan=" 4" style="padding: 20px;"><?php echo $row['DATE-6']
                                                                              ?></td>
                                    <td colspan="6" style="padding: 20px;"><?php echo $row['SUBJECT-6']
                                                                              ?></td>
                              </tr>

                              <tr>
                                    <td colspan=" 4" style="padding: 20px;"><?php echo $row['DATE-7']
                                                                              ?></td>
                                    <td colspan="6" style="padding: 20px;"><?php echo $row['SUBJECT-7']
                                                                              ?></td>
                              </tr>
                        </tbody>
                  </table>
      <?php  }
      }
      ?>
</body>
<footer> <?php include("footer.php") ?></footer>

</html>
<style>
      print_btn {
            size: larger;
      }

      html,
      body {
            border: 0;
            padding: 0;
      }

      h1 {
            margin-top: 35px;
            color: black;
      }

      h2 {
            padding: 15px;
            text-align: center;
      }

      table {
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            border-collapse: collapse;
            margin-top: 50px;
      }

      tr,
      td {
            padding: 20px;
            border-width: 1px;
            margin-left: auto;
            margin-right: auto;
      }
</style>