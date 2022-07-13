<?php
    // include connect.php to connect to the database
    include 'connect.php';
    // create a class called Backend.
    class Backend {
        // create a function called __construct.
        public function __construct() {
            // create a variable called $this->title and set it to 'Backend'.
            $this->title = 'Backend';
        }
        // create a function called index.
        public function index() {
            // create a variable called $this->content and set it to 'Backend'.
            $this->content = 'Backend';
        }

        // create login function.
        // function takes in a parameter called $email and $password.

        public function login($email, $password){
            // select all from the users table where the email is equal to the email parameter and the password is equal to the password parameter.
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $conn = $connection->prepare($sql);
            $conn->execute();
            $result = $conn->fetchAll();
            // if the result is greater than 0.
            echo $result;
            
            // get connection from connect.php.
            return 'login';
        }
    }

?>