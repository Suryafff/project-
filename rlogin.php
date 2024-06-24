<?php
$res;
session_start();
require 'components/navbar.php';
require'components/dbconnect.php';
if(!isset($_SESSION['username'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $sql ="SELECT * FROM `users` WHERE email ='$_POST[email]' && password='$_POST[password]'";
  $query_Run= mysqli_query($conn,$sql);
  $result=mysqli_num_rows($query_Run);
  
  if($result==1){
    $res=mysqli_fetch_row($query_Run);
    echo"<script>
    alert(`welcome back user your username is $res[1] kindly save it`);
     window.location.href='welcome.php';

     </script>";


     $_SESSION['username']=$res[1];
     }
  else{
    echo"<script>
    alert('Invalids credintals');
window.location.href='login.php';
     </script>";
    
  }
   
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