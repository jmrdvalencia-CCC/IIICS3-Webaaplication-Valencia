<?php

$loginCredentials = [
    [
        "username"=>"admin",
        "password"=>"1234",
        "role"=>"admin",
    ],
    [
        "username"=>"user",
        "password"=>"4321",
        "role"=>"staff",
    ]

    ];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST["username"];
$password=$_POST["password"];

foreach($loginCredentials as $loginCredential)
{
    if($loginCredential["username"]==$username)
    {
        echo "valid User";
        if($loginCredential["password"]==$password)
        {
            header("location:home.php");
        }
        else
        {
            header("location:index.php?error=1");
        }
    }
}


}
?>