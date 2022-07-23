<?php   
    // database connection
    // database name "php-auth"
    $db_name = "php-auth";
    // database username "root"
    $db_user = "root";
    // database password ""
    $db_password = "";

    // connect to database
    $connection = mysqli_connect("localhost", $db_user, $db_password, $db_name);

    // check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else {
        // echo "Connected to MySQL, Database '$db_name'";
    }

?>