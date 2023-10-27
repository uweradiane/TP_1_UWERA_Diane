<?php
function passwordLengthIsvalid($passwordToValid)
{
    //minimum 6 max 10
    $length = strlen($passwordToValid);
    $result = [
        'isValid'=>true,
        'msg'=>'mot de passe est correct'
    ];
    if ($length <6 ||$length >10 ){
        $result = [
            'isValid'=>false,
            'msg'=>'Mot de passe est trop court ou trop long'
        ];
    }
    
   
    return $result;
};
function addSalt($passwordToSalt){
    $salt = 'Diane12345@';
    $saltedPassword = $salt.$passwordToSalt.$salt;

    return $saltedPassword;
}
function encodePassword($saltedPassword){
    $encodePassword = sha1($saltedPassword);
    return $encodePassword;
}

?>