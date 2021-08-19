<?php
    session_start();
    $message = "";
    $name = $email = $reply = "";
    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
             $name = "Anonymous";
        }else{
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $message .= "<br> Email Is Required";
            header("Location: index.php");
        }else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["message"])){
            $message .= "<br> Message Is Required";
            header("Location: index.php");
        }else{
            $reply = test_input($_POST["message"]);
        }

        $message = "Hi {$name} Your Message Was Recieved";

    }
    else{
        $message = "Something went wrong please check your input and try again";
    }

    
    $_SESSION["message"] = $message;
    echo "Thanks For Submitting";

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>