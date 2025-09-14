<?php

$pwdSignup = "ibembem";

$options = [
    'cost' => 12
];

$hashedpwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdSignup = "ibembem22";

if(password_verify($pwdSignup, $hashedpwd)){
    echo "there are the same";
}else{
    echo "there are not the same";
}




// $sensitiveData = "Georgeikani";
// $salt = bin2hex(random_bytes(16)); //Generate random salt
// $pepper = "AsecretPepperString";

// //echo  "<br>" . $salt;

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

//echo  "<br>" . $hash;

/*----*/

//saving the $salt variable into a file system or db
//  to Check if the data matches the first $salt variable.
// $sensitiveData = "Georgeikani"; 

// $storedSalt = $salt;
// $storedHash = $hash;
// $pepper = "AsecretPepperString";

// $dataTohash = $sensitiveData . $salt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if($storedHash === $verificationHash){
//     echo "The data are the same!!";
//     echo "<br>";
//     echo $storedHash;
//     echo "<br>";
//     echo $verificationHash;

// }else{
//     echo "The data are not the same";
// }
