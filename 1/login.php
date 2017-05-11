<?php include 'core/init.php';
 if (empty($_POST) === false) {
       $email= $_POST['email'];
       $password=$_POST['password'];
       if (empty($email) === true or empty($password) === true) {?>
           <script language='javascript'>
                alert("Enter email address and password!")
                </script>
      <?php 
        }
         else {
        $login=login($email,$password);
        if($login===false) {?>
          <script language='javascript'>
                alert("Invalid email address/Password combination! Please try again...") ;
            </script>
        <?php
        } 
        else{
          $_SESSION['user_id']=$login;
          header('Location:index.php');
          exit();
         }
       }
}
include 'include/headers/other.php';
?>













