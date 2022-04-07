<?php
    //$con = mysqli_connect("localhost","ecoopsmu_investadmin","Investadmin123","ecoopsmu_invest");
    
    // $con = mysqli_connect("localhost","ecoopsmu_updateadmin","Admin123","ecoopsmu_invest");
    // $con = mysqli_connect("localhost","root","lekan2020","ecoopsmu_invest");
    $con = mysqli_connect("kutnpvrhom7lki7u.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","sd5yw3u9bz45li04","xsys863ljxa43awi","m6wbfmqw7zm5l4fl");

    if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
    ?>
     