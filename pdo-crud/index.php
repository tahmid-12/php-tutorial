<?php 
    session_start();
    include('./inc/header.php'); 
    require_once('fetch.php');
?>
     <div class='container'>
        <div class='row'>
            <div class='col-md-12 mt-4'>
                <?php if(isset($_SESSION['message'])) : ?>
                        <h5 class='alert alert-success'><?= $_SESSION['message']; ?></h5>
                <?php
                     unset($_SESSION['message']);
                     endif 
                ?> 
                <div class='card'>
                    <div class='card-header' style='display: flex;justify-content: space-between;'>
                        <h1>PHP PDO CRUD Operation</h1>   
                        <a href='student-add.php' class='btn btn-primary float-end' style='padding: 15px;'>ADD Student</a>
                    </div>
                    <div class='card-body'>
                        <table class='table table-bordered table-striped'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($result){ 
                                    foreach($result as $row){
                                    ?>

                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['Name']; ?></td>
                                        <td><?= $row['Email']; ?></td>
                                        <td><?= $row['Phone'];?></td>
                                        <td><?= $row['Course']; ?></td>
                                        <td>
                                            <a href='' class='btn btn-success'>Edit</a>
                                            <a href='' class='btn btn-danger'>Delete</a>
                                        </td>
                                    </tr>    
                                    <?php } ?>   
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="5">No Data Found</td>
                                    </tr>   
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
<?php include('./inc/footer.php'); ?>