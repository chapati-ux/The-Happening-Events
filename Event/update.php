<?php include("connection.php"); 
$id = $_GET['email'];

$query = "SELECT * FROM user where  email = '$id'";
mysqli_query(mysql: $con, query:$query);
$data = mysqli_query(mysql: $con,query: $query);
$result = mysqli_fetch_assoc(result: $data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

</head>
<style>
body{
    background-color: rgb(85, 51, 119);
}
.container{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    padding: 15%;
font-size: large;
}
.title{
    font-size: 36px;
    padding-bottom:20px ;
    font-weight: 800;
}

</style>
<body>
<br><br>
<div class="container">
    
    <div class="title">
            Update Details
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" value="<?php echo $result['Name']?>"  placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" value="<?php echo $result['email']?>"placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Password</label>  <input type="password" value="<?php echo $result['password']?>" placeholder="password" maxlength="6" name="pass"required><br><br>
                 <label>Confirm Password</label> <input type="password" value="<?php echo $result['Cpassword']?>" placeholder="password" maxlength="6"
                    name="Cpass"required ><br><br><br>
                   
           <input type='submit' value="Update" class='btn' name='Update' onclick="message()"> 
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
   $Name      = $_POST['user'];
   $email      = $_POST['id'];
   $password   = $_POST['pass'];
   $Cpassword  = $_POST['Cpass'];
 $query="UPDATE user SET Name='$Name',email='$email',password='$password',Cpassword='$Cpassword' WHERE Email='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/display.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>
