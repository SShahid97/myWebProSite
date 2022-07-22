<?php require_once("../credentials.php")?>
<?php
    //creating connection
     $conn = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DBNAME);

    if(mysqli_connect_errno()){
        echo "There was an error while creating the connection".mysqli_connect_error();
    }
    // else{
    //     echo "your connection to the database was successful";
    // }
      
?>