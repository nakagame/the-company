<?php
    include "../classes/User.php";

    // Create an obj
    $user = new User;

    // call the method
    $user->login($_POST);
?>