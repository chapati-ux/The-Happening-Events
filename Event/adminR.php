<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New registertion</title>
    
</head>
<style>
    body {
        background-color:  rgb(85, 51, 119);
        padding: 0 10px;
    }
  
    .container {
        padding: 6.5%;
        margin: 150px auto;
        box-shadow: 15px 2px 10px rgb(0, 0, 0, 0.9);
        max-width: 500px;
        width: 100%;
        border-radius: 65px;
        background-color: black;
        font-size: 20px;
        font-weight: 400;
        
    }
.title{
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 25px;
    color: whitesmoke;
    text-align: center;
    text-transform: uppercase;
    
}
form{
   padding: 10px  20px 15px 25px; 
   color: whitesmoke;
   margin: auto;

}
label{
    width: 25px;
    margin-right: 10px;
    font-size: 15px;
}
input{
    width: 55%;
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
@media (max-width: 570px) {
    input{
        flex-direction: column;
        align-items: flex-start;
 }
 label{
    margin-bottom: 5px;
 }
}
.login{
    font-size: medium;
    padding: 5px;
    text-align: center;
    color: black;
    text-align: right;
    
}


</style>

<body>

    <div class="container">
    
    <div class="title">
            Admin ID
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" placeholder="adminID" spellcheck="true" maxlength="20"
                    name="admin" required><br><br>
                     
                    <label>Password</label>  <input type="password" placeholder="password" maxlength="6" name="pass"required><br><br>
           <input type='submit' value="Register" class='btn' name='Register' onclick="message()"> 
           <br><br>
        <div class="login">
            If alredy have an account <a href="adminlogin.php">Login</a>
          </div>
        </div>
        
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Register'])
    {
   $Name      = $_POST['admin'];
 
   $password   = $_POST['pass'];
  
 $query = "INSERT INTO Adminpage VALUES('$Name','$password')";
 $data= mysqli_query(mysql: $con,query: $query);
if($data)
{
    echo"Data inserted  into database";
}
else{
        echo "Failed";
 }
    }
    if($data){ 
   header(header: "location:Adminlogin.php");}
    
?>
