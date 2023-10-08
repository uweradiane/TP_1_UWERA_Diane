<?php
function nameLengthIsvalid($passwordToValid)
{
    //minimum 6 max 10
    $length = strlen($passwordToValid);
    $responses = [
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length <6){
        $responses = [
            'isValid'=>false,
            'msg'=>'Mode de passe est trop court'
        ];
    }
    elseif($length >10){
        $reponses=[
            'isValid'=>false,
            'msg'=>'mode de est trop long'
        ];
    }
    return $responses;
};
function addSalt($passwordToSalt){
    $salt = ' ABC 1234@';
    $saltedpassword = $salt.$passwordToSalt.$salt;
    return $saltedpassword;
}
function encodepassword($saltedpassword){
    $encodepassword = sha1($saltedpassword);
    return $encodepassword;
}

?>