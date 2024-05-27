<?php

if ($_POST) {
    if (isset($_POST['register']) && $_POST['register'] == "Register") {
        include_once 'User.php';
        $user = new User();
        $user->setUsername($_POST['registerUsername']);
        $user->setPassword($_POST['registerPassword']);
        $user->setEmail($_POST['registerEMail']);
        //step 2 , 3 & 4:
        $result = $user->register($user);
        if ($result == true){
            echo'<script>alert("Signed up successfully")</script>';
            echo '<script>location.href="../After_Login_index.html";</script>';
        } else{
            echo'<script>alert("error while registering")</script>';
            echo '<script>location.href="../Login & Reg/reg_from.html";</script>';
        }
            
    }
} 
