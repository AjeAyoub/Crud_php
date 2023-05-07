
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['update'])){
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "update `crud` set id=$id , name='$name', email='$email',mobile='$mobile',password='$password'
   where id=$id";

  $result = mysqli_query($con,$sql);

  if($result){
  // echo  "updated successfully";
   header('location:display.php');
  }else{
        die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>
<body>


  <div class="container">
    <form method="post" class="my-5">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off"
         value=<?php echo $name; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off"
         value=<?php echo $email; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile Number</label>
        <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" autocomplete="off"
         value= <?php echo $mobile; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off"
        value=<?php echo $password; ?>>
      </div>
      <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
  </div>
</body>
</html>