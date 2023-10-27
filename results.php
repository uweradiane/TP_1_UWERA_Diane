<?php
// 2 character salt

require_once("functions.php");
//var_dump($_POST);

   // le mot de passe 
if($_POST){
    $password = $_POST['password'];
    if (empty($password)){
        echo "</br> password is empty ";
    }

    if($passwordLengthIsValid = passwordLengthIsvalid($_POST['password'])){
        echo "";
    }
    echo '</br>';
    
    if(!$passwordLengthIsValid['isValid']){
        //on faisst note traitement
    }
    else{
        
        echo "";
       
    }
    
    
};

     
     $LastName = $_POST['LastName'];
     $FirstName = $_POST['FirstName'];
     $age = $_POST['age'];
     $user=$_POST['user'];
     $passwordConfirm=$_POST['passwordConfirm'];
     // confirmation de mot de passe
if($_POST){
    
    if ($password==$passwordConfirm){
        
        echo '</br>';
             echo "<br> Le nom est:  " . $LastName;
             echo "<br> Le prenom est:  " . $FirstName;
             echo "<br> L' age est:  " . $age;
             echo "<br> L' user est:  " . $user;
    

    echo '</br>';
}
    else{
    echo "Le mode de passe est incorect ecrit l autre";
    
    }
    echo '</br>';

};
$saltedPassword = addSalt($_POST['password']);
    var_dump($saltedPassword);
    $encodePassword = encodePassword($saltedPassword);
     
    var_dump ($encodePassword);
   
    
?>
<a href ="./index.php"> return to the main form</a>