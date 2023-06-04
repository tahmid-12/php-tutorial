<?php
    session_start();
    $title = 'GET Input';

    include('./inc/header.php');
    include('./inc/constants.php');
    require('./inc/functions.php');
    
    // require_once('./inc/functions.php');

    if(is_user_authenticated()){
        redirect('admin.php');
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
        redirect('admin.php');
        die();
        if($email == false){
            $status = 'Please Enter Valid Email Address.';
        }

        if(authenticate_user($email, $password)){
            $_SESSION['email'] = $email;
        }else{
            $status = 'Please Provide Correct Credentials';
        }

    }
?>

<div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">POST Request</h1>
        </div>
      </div>
      <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Login"/>
            </div>
        </form>
      </div>
      <div class="row">
        <?php
            if(isset($status)){
                echo $status;
            } 
        ?>
      </div>
</div>      

<?php include('./inc/footer.php') ?>  