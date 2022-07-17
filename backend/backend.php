<form method="post
<?php
    // include connect.php to connect to the database
    include 'connect.php';
    // create a class called Backend.
    class Backend {
        //A functio n to validate user input

        public static function validatedata($data){
            $data=trim(stripslashes(htmlspecialchars($data)));
    
            return $data;
        }

        // create a function called __construct.
        public function __construct() {
            //validate username by shielding it fro sql injection
            $this->name=self::validatedata($_POST['name']);
    
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
            
            if (isset($_POST['login'])){
                    
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
            }
            
            return 'login';
        }


        public function register($password,$email){
            
            if (isset($_POST['register'])){

                // checking the validity of the user input
                if (preg_match("0-9A-za-z{!@#%$&^*()_-}[]'?/`~,.",$password) && preg_filter($email,FILTER_VALIDATE_EMAIL) && preg_match("a-zA-Z", $this->name)){

                    //inserting  user details into  the user table

                    $sql = "INSERT INTO users(fullname,email,password) VALUES ('$this->name','$password','$email')";
                    $conn = $connection->prepare($sql);
                    $conn->execute();
                    $result = $conn->fetchAll();

                    //if the result is greater than 0.
                    echo $result;
                }

                else{echo 'Invalid input: check the details in the filed';
                }      

            }
            return 'register';

        }
    }

?>