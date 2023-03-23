<?php



/**
$inputNumber=$_POST['entered_number'];
if ($inputNumber % 2 == 0) {
    echo "You enter an Even Number.";
} else {
    echo"You enter an Odd Number.";
}
*/



/**
$inputNum=$_POST['entered_number'];

$num=$inputNum;

for($i=1;$i<=10;$i++){
    echo "$num*$i=". $num*$i. "</br>";
}
*/



/**
$inputEmail=$_POST['user_email'];
$inputPass=$_POST['user_pass'];

if(strpos($inputEmail,'@') && strpos($inputEmail,".com")) {
    echo "Email ok"."<br>";
} else {
    echo "enter a valid email id"."<br>";
}

$passLength = strlen(($inputPass));
    if($passLength >= 6 && $passLength <=8)
    {
        echo "Suitable password"."<br>";
    }
    else
    {
        echo "enter a password from 6 to 8 char";
    }
    
*/