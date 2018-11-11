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
 ?>

<div class="admintitle" align="center">
  <h1>Welcome Admin Dashboard</h1>
  <h2> <a href="logout.php" style="float:right; ">Logout</a> </h2>

</div>

<div class="dashboard" style="width:50%;" align="center">
  <table border="1.2">
    <tr>
      <td>1.</td>
      <td> <a href="addstudent.php">Insert Student</a> </td>
    </tr>
    <tr>
      <td>2.</td>
      <td> <a href="updatestudent.php">Update Student</a> </td>
    </tr>
    <tr>
      <td>3.</td>
      <td> <a href="deletestudent.php">Delete Student</a> </td>
    </tr>
  </table>
</div>


  </body>
</html>
