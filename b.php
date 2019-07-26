<?php 
if(isset($_POST['btn'])){
    echo ($_POST['username']);
    echo '<br/>';
    echo ($_POST['password']);
    echo '<br/>';
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user=="admin" && $pass=="12345"){
        echo "<font color='red'>Welcome to, admin</font>";
    }else{
        echo "Wrong username or password, please try again";
    }
};
?>