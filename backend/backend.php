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
            
            if (preg_match("0-9A-za-z{!@#%$&^*()_-}[]'?/`~,.",$password) && preg_filter($email,FILTER_VALIDATE_EMAIL)){
            // select all from the users table where the email is equal to the email parameter and             //The password is equal to the password parameter.
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $conn = $connection->prepare($sql);
            $conn->execute();
            $result = $conn->fetchAll();
            // if the result is greater than 0.
            echo $result;
            }
            else{echo "Invalid input: check the details in the filed";
            }
            // get connection from connect.php.
            return 'login';
        }
    }

?>