<?php
require_once("functions.php");
var_dump($_POST);
if($_POST){
    $name = $_POST['mot de passe'];
    if (empty($password)){
        echo "</br> password is empty ";
    }
    else{
        echo "<br> Mon nom est:  " . $password;
    }
    $nameLengthIsValid = nameLengthIsvalid($_POST['mot de passe']);
    echo '</br>';
    var_dump($passwordLengthIsValid);
    if(!$passwordLengthIsValid['isValid']){
        //on fait note traitement
    }
};
    echo '</br>';
    $saltedpassword = addSalt($_POST['mot de password']);
    var_dump($saltedpassword);
    $encodepassword = $encodepassword($saltedpassword);
     echo '</br>';
    var_dump ($encodepassword);


?>