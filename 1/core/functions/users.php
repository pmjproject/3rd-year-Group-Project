<?php

//check whether logged in
function logged_in() {

    return (isset($_SESSION['user_id'])) ? true : false;
}


//fetch user id from username
function user_id_from_email ($email ) {
    $conn= mysqli_connect('localhost','root','','hrs');
    $email =sanitize($email );
    $query=mysqli_query($conn,"SELECT user_id FROM users WHERE email  = '$email '");
    $fetcharray=mysqli_fetch_array($query,MYSQLI_NUM);
    return $fetcharray[0];
}



//set login
function login($email ,$password) {
    $conn= mysqli_connect('localhost','root','','hrs');
    $user_id=user_id_from_email ($email );
  


    $email=sanitize($email );
    $password=md5($password);
 

    $query=mysqli_query($conn,"SELECT * FROM users WHERE email = '$email ' AND password='$password' AND active ='1'");
    $result=mysqli_num_rows($query);
    return ($result==1) ? $user_id :false;
    
}


//this function fetch the data relate to an user id
function user_data($user_id) {
	
    $data= array();
    $user_id=(int)$user_id;

    $func_num_args=func_num_args();
	
	//Returns an array of argument list
    $func_get_args=func_get_args();


    if ($func_num_args > 1) {
        unset($func_get_args[0]);
	
	// Join array elements with `
        $fields='`' . implode('`, `',$func_get_args) . '`';
		//echo $fields;

        $conn= mysqli_connect('localhost','root','','hrs');
        $query=mysqli_query($conn,"SELECT $fields FROM users WHERE user_id=$user_id");
        $data=mysqli_fetch_assoc($query);
        return $data;
       die();

    }

}




 ?>
