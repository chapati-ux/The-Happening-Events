<?php include("connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
    body{
        background-color: rgb(85, 51, 119);
}
    .container{
        padding: 5%;
        margin: 150px auto;
        border-radius: 75px;
        color: white;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 500px;
        width: 100%;
        background-color: black;
        font-size: 20px;
        font-weight: 400;
}
.from{
    padding: 10px  20px 15px 25px; 
   color: whitesmoke;
}
.title{
    font-size: xx-large;
    cursor: pointer;
    font-weight: 900;
    margin-bottom: 25px;
    color: whitesmoke;
    text-align: center;
    text-transform: uppercase;
}
input{
    width: 100%;
    outline: none;
    font-size: small;
    border-radius: 5px;
    transition: all 0.5s ease;
}
.btn{
    width: 100%;
    padding-left: 8px 10px;
    background-color: rgb(213, 205, 205);
    cursor: pointer;
    border-radius: 100px;
    outline: none;
}
.btn:hover{
    background-color: rgb(85, 51, 119);
}
.fpass{
    padding-top: 1%;
   padding-left: 25px;


}
.login{
  
    font-size: medium;
    padding: 5px;
    text-align: right;
   
}
a{ text-decoration: none;
    color:whitesmoke ;
    }
</style>
<body>
    <div class="container" >
    <form action="#" method="POST" autocomplete="off" >
    <div class="title"> Admin <a href="adminR.php"> Login</a> ID</div>
   <label> Name </label><br><input type="text" placeholder="AdminID" name="admin" required><Br><br>
   <label> Password </label><br><input type="password" placeholder=" login password" name="pass" maxlength="6" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">

  </div>
    </div>
    
</form>
</body>
</html>
<?php 
if(isset( $_POST["login"]))
    {
   $Name = $_POST['admin'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  Adminpage WHERE Name='$Name' && password='$password' ";
   $data = mysqli_query(mysql: $con, query: $query); 
  $total= mysqli_num_rows(result: $data);
  
  if($total == 1)
  {
    header(header: 'location:display.php');

}
else{
    echo "Login Failed";
}
    }


 ?>


