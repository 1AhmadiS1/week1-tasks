<?php
require_once 'Classes/User.php';

$user1 = new User("Ahmad", "ahmad@gmail.com");
echo $user1->getDetails();
?>