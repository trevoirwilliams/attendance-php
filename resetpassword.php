<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: manageusers.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $user->resetPassword($id);
        //Redirect to list
        if($result)
        {
            header("Location: manageusers.php?success=1");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>