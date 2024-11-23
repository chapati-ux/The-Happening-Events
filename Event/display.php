<?php include("connection.php"); ?>

<html>
  <head>
    <title> Register data</title>
    </head>
  <style>
    body{
      background-color: rgb(85, 51, 119);
      color: black;
    }
    h2{
      padding-left: 42%;
    }
    table{
      background-color:black;
      color:whitesmoke;
    border-radius: 10px;
    }
    .update{
      background-color:rgb(85, 51, 119) ;
      color: whitesmoke;
      border: solid 2px;
      border-radius: 5px;
      width: 100%;
    }
    .update:hover{
      background-color: black;
    }
    .delete{
      background-color:rgb(85, 51, 119) ;
      color: whitesmoke;
      border: solid 2px;
      border-radius: 5px;
      width: 100%;


    }
    .delete:hover{
      background-color: black;
    }
    .btn{
    width: 25%;
    padding-left: 8px 10px;
    background-color: rgb(213, 205, 205);
    cursor: pointer;
    border-radius: 100px;
    outline: none;
    margin-left: 40%;
}
.btn:hover{
    background-color: whitesmoke;
}
.bnt{
    width: 10%;
    padding-left: 8px 10px;
    background-color: rgb(85, 51, 119);
    cursor: pointer;
    color: white;
    border-radius: 100px;
    outline: none;
    margin-left: 90%;
}
.bnt:hover{
    background-color: black;
    color: whitesmoke;
}

  </style>
  <body>
<?php 
   
  error_reporting(error_level: 0);
    $query = "SELECT * FROM user";
    mysqli_query(mysql: $con, query:$query);
    $data = mysqli_query(mysql: $con,query: $query);
   $total =  mysqli_num_rows(result: $data);
  //echo $total;
   if($total != 0)

   {
    ?>
 <h2> <align="center"><br>Display Register Records</h2>
<br><br><br><br><br>
<a href="adminlogin.php">
<input type="button" value="Log out"  class="bnt"></a>
</a>
<br><br>
 <center> <table border="1px" cellspacing="5" width="80%">
    <tr>  
    <th widht="20%">Name</th>
   <th  widht="20%">email</th>
    <th widht="20%">password</th>
    <th widht="20%">Cpassword</th>
    <th width="20%">Actions</th>
  
  </tr>
<?php
   while($result = mysqli_fetch_assoc(result: $data))
   {
    echo"<tr> 
        <td>".$result["Name"]."</td>
         <td>".$result["email"]."</td>
      <td>".$result["password"]."</td>
      <td>".$result["Cpassword"]."</td>
   
<td><a href='update.php?email=$result[email]'><input type='submit' value='Update' class='update'></a>
      <a href='delete.php?email=$result[email]'><input type='submit' value='Delete' class='delete' onclick='deletemsg()'></a></td>
      </tr>";
   }
}
else{
    echo "table has no records";
}
?>
</table></center>
<script>
function deletemsg(){
  return alert('Are you want to delete record?');
}
</script>

  </body>
  </html>