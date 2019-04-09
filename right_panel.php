 <?php include 'body.php';?>
 


<?php
include('dbconnect.php');
$db_records=mysqli_query($conn,"SELECT * FROM employee") or die(mysqli_error());
?>

<div id="right-panel" class="right-panel">

        
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    
                    
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Registered Guests</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Full name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($record=mysqli_fetch_assoc($db_records)){
                                            ?>
                                            <tr>
                                                <td><?php echo $record['id'];?></td>
                                                <td><?php echo $record['full_name'];?></td>
                                                <td><?php echo $record['email'];?></td>
                                                <td><?php echo $record['gender'];?></td>
                                                <td><?php echo $record['department'];?></td>
                                                <td><?php echo $record['password'];?></td>
                                                <td>
                                                    <a href="view.php?id=<?php echo $record['id'];?>" class="btn btn-primary">View</a>
                                                    <a href="update.php?id=<?php echo $record['id'];?>" class="btn btn-info">Update</a>
                                                    <a href="delete.php?id=<?php echo $record['id'];?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        
                </div>   
                </div>
            </div><!-- .animated -->
        </div>
        </div> <!-- .content -->
    </div>