<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into `log in` (name,email,password)
    values('$name','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data Inserted Successfully";
       header ('location:display.php');
    }else{
        die(mysqli_error($con));
    
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Log In</title>
  </head>
  <body>
      <h1>Log In</h1>
    <div class="container my-5"></div>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"
                placeholder="Enter your Name" 
                name="name" autocomplete="off">
            </div>        
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                placeholder="Enter your Email" 
                name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control"
                placeholder="Enter your Password" 
                name="password" autocomplete="off">
            </div>      
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
  </body>
</html>