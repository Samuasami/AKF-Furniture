<?php
$con=mysqli_connect("localhost","root","") or die(mysql_error());
if($con){
    mysqli_select_db($con,"akf") or die(mysql_error());

    $image=$_POST["img_src"];
    $id=$_POST["no"];
    $name=$_POST["pname"];
    $description=$_POST["comment"];

    $username=$_POST["uname"];
    $password=$_POST["upass"];
    $sql="select * from user";
    mysqli_query($con,$sql) or die(mysql_error());
    
    if($username=="Admin"||$password=="admin"){
        $upd="update gallery set img_src='$image',name='$name',description='$description' where input_no='$id'";
        mysqli_query($con,$upd) or die(mysql_error());
        $select="select *from gallery";
        mysqli_query($con,$select) or die(mysql_error());
    
        echo"
        <script>
        alert('Data is updated');
        </script>
        ";

    }
    else{
        echo"
        <script>
        alert('Incorect Username or password ');
        </script>
        ";
    }

   
    

}


?>