<?php include('./inc/header.php'); ?>
     <div class='container'>
        <div class='row'>
            <div class='col-md-12 mt-4'>
                <div class='card'>
                    <div class='card-header'  style='display: flex;justify-content: space-between;'>
                        <h1>Add Student</h1>
                        <a href='index.php' class='btn btn-danger float-end' style='padding: 15px;'>Back</a>
                    </div>
                    <div class='card-body'>
                        <form action='code.php' method='POST'>
                            <div class='mb-3'>
                                <label name='Name'>Name</label>
                                <input type='text' name='name' class='form-control'/>
                            </div>
                            <div class='mb-3'>
                                <label name='email'>Email</label>
                                <input type='text' name='email' class='form-control'/>
                            </div>
                            <div class='mb-3'>
                                <label name='phone'>Phone</label>
                                <input type='text' name='phone' class='form-control'/>
                            </div>
                            <div class='mb-3'>
                                <label name='course'>Course</label>
                                <input type='text' name='course' class='form-control'/>
                            </div>
                            <div class='mb-3'>
                                <button type='submit' name='submit' class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
<?php include('./inc/footer.php'); ?>