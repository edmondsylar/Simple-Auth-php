<!DOCTYPE html>
<html>
    <body>
    <form action="" enctype="multipart/form-data" method="post"><br><br>
        book title: <input type="text" name="booktitle"><br><br>
        bookauthor: <input type="text" name="author"><br><br>
        isbn: <input type="text" name="isbn"><br><br>
        shelfno: <input type="text" name="shelfno"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>
    <P></P>
</body>
</html>

<?php
class insertdata{
    /**
     * This variable will hold the title of the book to be inserted into the database
     * @var string
     */
    public $booktitle;
    /**
     * This variable will hold the name of the author who wrote the book
     * @var string
     */
    public $author;
    /**
     * This variable will hold the ISBN of the book
     * @var int
     */
    public $isbn;
    /**
     * This variable will hold the shelf number where the book will be inserted
     * @var int
     */
    public  $shelfno;

    /**
     * validating user input
     */

    public static function validatedata($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);

        return $data;
    }

    public function __construct(){
        $this->booktitle=self::validatedata($_POST['booktitle']);
        $this->author=self::validatedata($_POST['author']);
        $this->isbn=self::validatedata($_POST['isbn']);
        $this->shelfno=self::validatedata($_POST['shelfno']);

    }

    public function data(){
        /**
         * connecting to the server
         */

        $con=new mysqli('localhost','root', '', 'lms');
        if ($con->connect_error){
            echo "unable to conect to the server: ".$con->connect_error;
        }
        else{
        echo "successfully connected to the server!";
        }

        /**
         * Inserting data into the database by preparing the prameters with data to be iserted
         * The information is got from GET array
         */

        if(isset($_POST['submit'])){

            $sql = "INSERT INTO table2 (booktitle, author, isbn, shelfno) VALUES ('$this->booktitle', '$this->author', $this->isbn, $this->shelfno)";
                // checking the validity of insertion of the details

                if(!mysqli_query($con,$sql)){
                    echo 'unable to add book details: '.mysqli_error($con);
                }  
                else{
                    if(empty($this->booktitle) || empty($this->author) || empty($this->isbn)|| empty($this->shelfno)){
                        echo 'please fill all the required fields!';
                    }else{
                        echo 'book details added successfully';
                    }
                }
                
        }

    }
}
$object = new insertdata;
echo $object->data();
?>