<?php 
session_start();
include_once "conn.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){
        // let's check users entered email & password matched to db
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($sql) > 0) {   //if users credentils matched
            $row = mysqli_fetch_array($sql);
            $status ="Active now";
            // updating user status to active now if user login successfully
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$row['unique_id']}");
            if($sql){
                $_SESSION['unique_id'] = $row['unique_id']; 
                echo "success";
            }
        }else {
            echo "Email or passwod is not right";
        }
    }else{
        echo 'All Field are required';
    }     

?>