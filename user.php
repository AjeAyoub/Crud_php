<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `cruds` (name, email, password, phone, country) VALUES ('$name','$email','$password','$phone','$country')";
    $result = mysqli_query($con,$sql);

    if($result){
       // echo "used added successfuly";
       header('location:show_users.php');
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Add User</title>
</head>
<body>
    <div class = "container" >
      <form method = "POST">
      <div class="mb-3 my-5">
          <input type="text" class="form-control" name="name" autocomplete= "off"  placeholder="Name">
        </div>
        <div class="mb-3  "  >
          <input type="email" class="form-control" name="email" autocomplete= "off"  placeholder="Email address">
        </div>
        <div class="mb-3 " >
          <input type="password" class="form-control" name="password" autocomplete= "off"  placeholder="Password">
        </div>
        <div class="mb-3 " >
          <input type="text" class="form-control" name="phone" autocomplete= "off"  placeholder="Phone">
        </div>
        <div class="mb-3 " >
          <input type="text" class="form-control" name="country" autocomplete= "off"  placeholder="Country">
        </div>
        
       
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
      </form>
    </div>
    
</body>
</html>