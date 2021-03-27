

<?php
   include('db_connect.php');
   session_start();
   
   $user_check = $_SESSION['user_id'];
   
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($conn,$ses_sqlC);
   
   $login_session = $row['username'];
   
 
?>