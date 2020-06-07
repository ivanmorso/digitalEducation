<?php
    session_destroy();
    
    $http = "Location: ../index.php";
    
    header($http);

