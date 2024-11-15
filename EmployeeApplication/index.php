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
                        <a href="add.php" class="text-light"> <button class="btn btn-success"> Add </button> </a> 
                            <br/>
                            <br/> 
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,"employee");

                                     $sql = "select * from empdetails";
                                     $run = mysqli_query($connection,$sql);

                                     $id=1;
                                     while($row = mysqli_fetch_array($run))
                                     {
                                        $uid = $row['id'];
                                        $name = $row['name'];
                                        $address = $row['address'];
                                        $mobile = $row['mobile'];
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $mobile ?></td>
                                   

                                     <td>
                                     <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> <button class="btn btn-success"> Edit </button> </a> 
                                     <a href='delete.php?del=<?php echo $uid ?>' class="text-light"> <button class="btn btn-danger"> Delete </button> </a> 
                                     </td>

                                     </tr>


                                     <?php $id++; } ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            <div>
        <div>
    <div>

    
</body>
</html>