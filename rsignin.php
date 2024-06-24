<?php 
require 'dbconnect.php';

if(!isset($_SESSION['username']))
{

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$sql ="SELECT * FROM `users` WHERE email ='$_POST[email]'";
$query_Run= mysqli_query($conn,$sql);
$result=mysqli_num_rows($query_Run);
if($result>0){
  echo"<script>
  alert('email already register !please login');
    window.location.href='login.php';
   </script>";
}
else{
  $confirmpass=$_POST['cpass'];
  $pass= $_POST['password'];
  if($confirmpass==$pass){
   // for hashing the password through bluefish algorithms
   // $newpass=password_hash($pass,PASSWORD_BCRYPT);
 $insert_query= "INSERT INTO `users` ( `username`, `email`, `password`, `date`) VALUES ( '$_POST[username]', '$_POST[email]', '$pass',current_timestamp())";

 if(mysqli_query($conn,$insert_query)){
  echo"<script>
  alert('user register successfully');
  window.location.href='login.php';
   </script>";
}
else{
  echo"<script>
  alert('something went wrong');
    window.location.href='signin.php';
   </script>";
}
 }
 else{
  echo"<script>
  alert('password dont match ! please try again');
  window.location.href='signin.php';
   </script>"; 
}
}

}


else
{
  echo"<script>
 alert('failure')
  </script>";
}
}
else{
  echo"<script>
  alert('you are logged in please logout')
   </script>";
   echo"
   <script>
  window.location.href='welcome.php';
   </script>";
}
?>
