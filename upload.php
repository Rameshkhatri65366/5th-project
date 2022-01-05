<?php session_start(); ?>
<link rel="stylesheet" href="viewtable.css">
<a class="navbar-brand">ADMIN PANNEL</a>
<div class="form-inline">

  <a href="update_admin_form.php" class="btn btn-outline-default my-2 my-sm-0" type="submit">Change Username Password</a>

  <?php
  if (isset($_SESSION['ID'])) {
  ?>
    <button class="logout"><a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">LOGOUT</a></Button>
  <?php } else {
    header("location: admin.php");
  } ?>
</div>
</nav>
<style>
  .logout {
    margin-left: 90%;

  }
</style>




<div class="container">
  <br>
  <h2>1. Upload Result </h2>
  <br>

  <br>



  <form action="import_file.php" method="post" enctype="multipart/form-data" class="form-inline">

    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">Email</label>
      Choose a csv/excel file :
    </div>

    <div class="form-group mx-sm-3 mb-2">

      <input type="file" name="file" id="file" class="form-control">

    </div>

    <input type="submit" name="submit" value="Upload" class="btn btn-primary mb-2">

  </form>


  <br>
  <br>

  <hr style="height:5px;border-width:0;color:gray;background-color:gray">



  <br>
  <?php
  include_once 'db_connect.php';
  ?>
  <html>

  <head>
    <title></title>
  </head>

  <body>
    <div id="header">
      <h1><label>2. EXAM CENTERS INFORMATION</label></h1>
    </div>
    <p>1. UPLOAD EXAM CENTERS</p>
    <div id="body">
      <form action="fetch.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" /><br>
        Enter the date of notice published: <input type="date" name="date" id="date" required><br>
        Description about the notice :
        <br><textarea type="text" name="description_notice" rows="3" cols="50" value="description_notice">
</textarea>
        <br>
        <button type="submit" name="btn-upload">Upload</button><br>
      </form>
      <br /><br />
      <?php
      ?>
  </body>

  </html>
  <?php
  include_once 'db_connect.php';
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title></title>

  <body>

    <label>
      <h1>EXAM CENTER NOTICES</h1>
    </label>
    <link rel="stylesheet" href="style.css">

    </style>
    <div id="body">
      <table border="1">
        <tr>
          <td>Notice No</td>
          <td>Notice</td>
          <td>Date</td>
          <td>View</td>
          <td>Delete</td>
        </tr>
        <tr>
          <?php
          $sql = "SELECT * FROM `tbl_uploads`";
          $result_set = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result_set)) { ?>
            <td width="100px"><?php echo $row['id'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td width="150px"> <?php echo $row['date'] ?> </td>
            <td width="300px"><a href="uploads/<?php echo $row['file'] ?>" target="view.php">CLICK TO VIEW EXAM CENTERS</a></td>
            <td>
              <form action="code.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
              </form>
            </td>
        </tr>
      <?php  } ?>
    </div>
    </table>
    <hr style="margin-left:15;height:5px;border-width:0;color:gray;background-color:gray" ;width="100%">
  </body>

  </html>

  <html>
  <h1><label>3. Latest notice</label></h1>
</div>
<p>UPLOAD notice </p>
<form action="noticeupload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="date" name="date">
  <br><textarea type="text" name="description" rows="3" cols="50" value="description">
</textarea>
  <button type="submit" name="btn_notice">Upload</button><br>
</form>

</html>

<?php include("footer.php");     ?>