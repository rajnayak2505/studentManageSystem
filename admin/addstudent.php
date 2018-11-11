<?php

session_start();

if(isset($_SESSION['uid'])){
  echo "";
}
else {
header('location: ../login.php');
}
 ?>

<?php
include('header.php');
include('titlehead.php');
 ?>


<form class="" action="addstudent.php" method="post" enctype="multipart/form-data">
  <table align="center" style="width:70%; margin-top:40px;">
    <tr>
      <th>Roll No.</th>
      <td><input type="text" name="rollno" placeholder="Enter Roll No." value="" required></td>
    </tr>
    <tr>
      <th>Full Name</th>
      <td> <input type="text" name="name" placeholder="Enter Full Name" value="" required> </td>
    </tr>
    <tr>
      <th>City.</th>
      <td><input type="text" name="city" placeholder="Enter City" value="" required></td>
    </tr>
    <tr>
      <th>Parent Contact No.</th>
      <td><input type="text" name="pcon" placeholder="Enter Parent Contact No" value="" required></td>
    </tr>
    <tr>
      <th>Standard</th>
      <td><input type="number" name="std" placeholder="Enter Standard" value="" required></td>
    </tr>
    <tr>
      <th>Images</th>
      <td><input type="file" name="simg"  value="" required></td>
    </tr>
    <tr>
      <td align="center"> <input type="submit" name="submit" value="Submit"> </td>
    </tr>

  </table>

</form>


</boody>
</html>

<?php

if(isset($_POST['submit']))
{
  include('../dbcon.php');

  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $city = $_POST['city'];
  $pcon = $_POST['pcon'];
  $std = $_POST['std'];
  $imagename = $_FILES['simg']['name'];
 $tempname = $_FILES['simg']['tmp_name'];

 move_uploaded_file($tempname,"../dataimg/$imagename");


  $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";

  $run = mysqli_query($con,$qry);

  if($run == true)
  {
    ?>
    <script>
      alert('Data Inserted Successfully');
    </script>
    <?php
  }
}

 ?>
