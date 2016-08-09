<?php
include 'functions/all.php';
if(isset($_POST['submit'])){
registration($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h2 class="text-center">Register Now</h2>
<?php
        if(isset($_SESSION['errors'])){
            $errors=$_SESSION['errors'];
            if(count($errors)!==0){
                ?>
            <div class="alert alert-danger">
                <b>Please fix following errors..</b>
                <ul>
                <?php
                    foreach($errors as $error){
                      echo "<li>".$error."</li>";
                    }
                ?>
                </ul>
            </div>

<?php
            }else{
                $_POST=null;
            }

        }
?>


            <form action="index.php" method="post">
                <div class="form-group">
                    <lable for="first_name">First Name</lable>
                    <input type="text" name="first_name" id="first_name" value="<?php echo (isset($_POST['first_name']))?$_POST['first_name']:''?>" class="form-control">
                </div>

                <div class="form-group">
                    <lable for="last_name">Last Name</lable>
                    <input type="text" name="last_name" id="last_name" value="<?php echo (isset($_POST['last_name']))?$_POST['last_name']:''?>"  class="form-control">
                </div>

                <div class="form-group">
                    <lable for="email">E-mail</lable>
                    <input type="email" name="email" id="email"  value="<?php echo (isset($_POST['email']))?$_POST['email']:''?>" class="form-control">
                </div>

                <div class="form-group">
                    <lable for="user_name">User Name</lable>
                    <input type="text" name="user_name" id="user_name" value="<?php echo (isset($_POST['user_name']))?$_POST['user_name']:''?>" class="form-control">
                </div>

                <div class="form-group">
                    <lable for="password">Password</lable>
                    <input type="password" name="password" id="password"  value="" class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info" name="submit" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>