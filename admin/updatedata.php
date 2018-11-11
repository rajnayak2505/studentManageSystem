<?php

include('../dbcon.php');


if(isset($_POST['submit'])){
  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $city = $_POST['city'];
  $pcon = $_POST['pcon'];
  $std = $_POST['std'];
  $id = $_POST['sid'];
  $imagename = $_FILES['simg']['name'];
  $tempname = $_FILES['simg']['tmp_name'];

}

// if (isset($_POST['rollno'])){
//     $rollno = $_POST['rollno'];
// }
//
// if (isset($_POST['name'])){
//     $name = $_POST['name'];
// }
//
// if (isset($_POST['city'])){
//     $city = $_POST['city'];
// }
//
// if (isset($_POST['pcon'])){
//     $pcon = $_POST['pcon'];
// }
//
// if (isset($_POST['std'])){
//     $std = $_POST['std'];
// }
//
// if (isset($_POST['sid'])){
//     $id = $_POST['sid'];
// }
//
// if (isset($_FILES['simg']['name'])){
//     $imagename = $_FILES['simg']['name'];
// }
//
// if (isset($_FILES['simg']['tmp_name'])){
//     $tempname = $_FILES['simg']['tmp_name'];
// }

move_uploaded_file($tempname,"../dataimg/$imagename");


$qry = "UPDATE `student` SET `rollno` = $rollno, `name` ='$name', `city` = '$city', `pcont` = $pcon, `standard` = $std, `image` = '$imagename' WHERE `id` = $id;";

$run = mysqli_query($con,$qry);

if($run == true)
{
  ?>
  <script>
    alert('Data updated Successfully');
    window.open('updateform.php?sid=<?php echo $id; ?>', "_self");
  </script>
  <?php
}else{
  echo "failed";
  echo $run;
}

 ?>
