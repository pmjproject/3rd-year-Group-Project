

<?php

    if (logged_in() === false) {
    include 'include/widgets/login.php';
      } else {
    include 'logout.php';
     }



?>
