 <?php

 //if not logged in redirect to the ptotected page
 function protect_page() {
  if (logged_in() === false) {
    header('Location:protected.php');
    exit();
  }

 }

//sanitize the data entered by a user
function sanitize ($data){
    $conn= mysqli_connect('localhost','root','','hrs');
    return mysqli_real_escape_string($conn,$data);
}


?>
