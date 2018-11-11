<?php
// ye karne se session jab tak khatm nhi hoga jab tak user browse band na kr de agar user bina broswe band kiye login hai to usse bar bar login na krna pade isliye ye karte hai
session_start();
if(isset($_SESSION['uid']))
{
  header('location:admin/admindash.php');

}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
  </head>
  <body>
    <h1 align="center">Admin Login</h1>
    <form class="" action="login.php" method="post">
      <table align="center">
        <tr>
          <td>Username</td>
          <td> <input type="text" name="uname" value="" required> </td>
        </tr>
        <tr>
          <td>Password</td>
          <td> <input type="password" name="pass" value="" required> </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="submit" name="login" value="Login"> </td>
        </tr>
      </table>
    </form>
  </body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
  $username = $_POST['uname'];
  $password = $_POST['pass'];

  $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  $run = mysqli_query($con,$qry);

  $row = mysqli_num_rows($run);
  if($row < 1)
  {
    ?>
    <script>
    alert("Username or Password Not Match!!");
    </script>
    <?php
  }
  else {
    $data = mysqli_fetch_assoc($run);

    $id = $data['id'];

    //this is checking for admin id showing or not
    // echo "id=".$id;


    $_SESSION['uid'] = $id;

    // redirect to the admindash of admin
    header('location:admin/admindash.php');

  }
}
 ?>
