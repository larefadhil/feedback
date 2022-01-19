<html>



<head>
    
<?php
    include 'conn.php';
    session_start();

    ?>
    
</head>
    
    <body>
      <h1 style="text-align: center;">بەکارهێنەرەکان</h1>
      <table>
      
     <tr>
         
         <th>UserName</th>
         <th>Password</th>
         <th>Fullname</th>
         <th>UserType</th>
         <th>Lesson</th>
         
     </tr>   
        
    
    <?php
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM user";
        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[1] .'</td>
        <td>' .$row[2] .'</td>
        <td>' .$row[3] .'</td>
        <td>' .$row[4] .'</td>
        <td>' .$row[5] .'</td>'.'</tr>';
        
   }
    ?>
    
            </table>
<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; "></a> 

<style>
table{
  width:100%;
  table-layout: fixed;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  color: white;
  font-weight: bolder;
  font-size: 30px;
}
section{
  margin: 50px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 20px;
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 20px;
  background-color: #51A09A;
  color: white;
}
input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  width: 100%;
  border: 0;
  margin: 50 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 20px;
}
</style>
    </body>






</html>