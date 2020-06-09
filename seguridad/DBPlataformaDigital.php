<?php

    $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "dbdigitaledutacion.mysql.database.azure.com", 
        "digitaleducation@dbdigitaledutacion", {your_password}, {your_database}, 3306):

    define("IP","dbdigitaledutacion.mysql.database.azure.com1");
    define("USUARIO","digitaleducation");
    define("PASSWD","Nc63hbxdye");
    define("DB","dbdigitaledutacion");
?>