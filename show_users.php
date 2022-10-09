<?php
include 'connect.php';
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
    <div class = "container" class="my-5" >
     
        <button type="submit" class=" my-5 btn btn-success "  name = "submit"><a class = "text-light" href="user.php"> Add User </a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">phone</th>
      <th scope="col">country</th>

    </tr>
  </thead>

  <tbody>

  <?php
  $sql = "SELECT * from `cruds` ";
  $result = mysqli_query($con,$sql);

  while($row=mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $phone = $row['phone'];
    $country = $row['country'];


    echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>'.$phone.'</td>
      <td>'.$country.'</td>
    </tr> ' ;
    }   
?>
   
  
  </tbody>
</table>
    </div>
    
</body>
</html>