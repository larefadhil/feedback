<html>
<head>

</head>
 

<body>
<?php

include 'conn.php';

session_start();
$id=$_SESSION['user'];

?>
    
  <div class="login-page">
  <div class="form">     
    
      <h1>تۆمارکردنی فیدباک </h1>  
      <?php
      if(isset($_SESSION['user']))
    {
 echo "Welcome : " . $_SESSION['fname'] . "<br>";
  
    }
?>

      
<form class="feedback" action="" method="post">
  <br>
  object ordinered programming
  <input type="text" placeholder="لە ١ بۆ ٥ داخڵبکە" name="oop_r" > 
    <br>
  <input type="text" placeholder="تێبینی ئەکەت بنوسە" name="oop_c" style="height : 70px">
    <br>
    Network
  <input type="text" placeholder="لە ١ بۆ ٥ داخڵبکە" name="net_r">
    <br>
  <input type="text" placeholder="تێبینی ئەکەت بنوسە" name="net_c" style="height : 70px" >
   <br>   
   Database
  <input type="text" placeholder="لە ١ بۆ ٥ داخڵبکە" name="db_r">
    <br>
  <input type="text" placeholder="تێبینی ئەکەت بنوسە" name="db_c" style="height : 70px">
   <br>
   Programming
  <input type="text" placeholder="لە ١ بۆ ٥ داخڵبکە" name="pro_r">
    <br>
  <input type="text" placeholder="تێبینی ئەکەت بنوسە" name="pro_c" style="height : 70px">
   <br> 
  <button name="submitbtnf">زیادکردن </button>
    <hr>
   <a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; font-size: 20px;" ></a> 
   <a href="fp.php?logout"><input type="button" value="بینینەوە" style="font-size: 20px;"></a> 
     </form>
      </div>
    </div>
    
    
    <?php
    
    if(isset($_POST['submitbtnf'])){
        $oop_r=(int) $_POST['oop_r'];         
        $oop_c=$_POST['oop_c'];
        $net_r= (int) $_POST['net_r'];
        $net_c=$_POST['net_c'];
        $db_r=(int) $_POST['db_r'];         
        $db_c=$_POST['db_c'];
        $pro_r= (int) $_POST['pro_r'];
        $pro_c=$_POST['pro_c'];

    if ($oop_r <= 0 || $oop_r > 5 && $net_r <= 0 || $net_r > 5 && $db_r <= 0 || $db_r > 5 &&  $pro_r <= 0 || $pro_r > 5){   
      echo"<script>alert('you should enter between 1 to 5 ')</script>";}

      else{


        
        $query_insertf="INSERT into feedback (User_Id,oop_r,oop_c,net_r,net_c,db_r,db_c,pro_r,pro_c) values ('$id','$oop_r','$oop_c','$net_r','$net_c','$db_r','$db_c','$pro_r','$pro_c')";
   
        
        
    
    
   if(mysqli_query($conn,$query_insertf)){
     //  echo "<script>alert('زانیاریەکان تۆمار کران سوپاس بۆ بەژداریکردنت')</script>";
    
   $_SESSION['oop_r']=$oop_r;
   $_SESSION['oop_c']=$oop_c;
   $_SESSION['net_r']=$net_r;
   $_SESSION['ner_c']=$net_c;
   $_SESSION['db_r']=$db_r;
   $_SESSION['db_c']=$db_c;
   $_SESSION['pro_r']=$pro_r;
   $_SESSION['pro_c']=$pro_c;
   
       echo $_SESSION['oop_c'];
       
   }
    else{
       echo "<script>alert('ناتوانیت دوبارە زانیاری تۆمار بکەیت')</script>";
    }
        
    }}  
    
    
    ?>
        
        
    
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #09FCC1;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    font-size: 20px;

}
.form button:hover,.form button:active,.form button:focus {
  background: #00F3FF;
  font-size: 20px;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  color: back;
}

</style>
    
    
   </body> 
    

</html>




    
