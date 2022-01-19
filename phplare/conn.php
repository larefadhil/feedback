    
    <?php
    $dbHost ="localhost";
    $dbUser ="root";
    $dbPass ="";
    $dbName ="ptest";
    
    $conn = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);    
    
    if(!$conn){
        echo "fail";
    }
    ?>