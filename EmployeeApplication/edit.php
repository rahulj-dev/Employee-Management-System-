<?php
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"employee");

     $edit = $_GET['edit'];

     $sql = "select * from empdetails where id = '$edit'";

     $run = mysqli_query($connection,$sql);

     while($row=mysqli_fetch_array($run))
     {
        $uid = $row['id'];
        $name = $row['name'];
        $address = $row['address'];
        $mobile = $row['mobile'];
     }
  
?>

<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"employee");

    if(isset($_POST['submit']))
    {
        $edit = $_GET['edit'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];

        $sql = "update empdetails set name='$name', address='$address', mobile='$mobile' where id= '$edit'";

        if(mysqli_query($connection,$sql))
        {
            echo '<script>location.replace("index.php")</script>';
        }
        else
        {
             echo "Something Error" . $connection->error;
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Employee Management System
                    </div>
                        <div class="card-body">
                            <form action="edit.php?edit=<?php echo $edit ?>" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter address" value="<?php echo $address; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter mobile no" value="<?php echo $mobile; ?>">
                                </div>
                                <br/>
                                <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                            </form>
                        </div>
                </div>
            <div>
        <div>
    <div>

    
</body>
</html>