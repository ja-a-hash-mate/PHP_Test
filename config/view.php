<?php 
    require_once('DBconfing.php');
    $db = new operations();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Forum</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bg-dark">

<p class="bg-light text-center">Welcome to Registration Form</p>
  <div class="container">
    <div class="row">
        <div class="col-md m-auto">
            <div class="card mt-2.5">
                <div class="card-header">
                    <h2>Sign Up Form</h2>
                </div>
                <?php $db->Store_Record(); ?>
                <div class="card-body">
                    <form method="POST">
                    <input type="text" name="First_Name" placeholder="First Name" class="form-control mb-2">
                    <input type="text" name="Middle_Name" placeholder="Middle Name" class="form-control mb-2">
                    <input type="text" name="Last_Name" placeholder="Last Name" class="form-control mb-2">
                    <input type="text" name="Email_Address" placeholder="Email Address" class="form-control mb-2">
                    <input type="text" name="Username" placeholder="Username" class="form-control mb-2">
                    </form>
                </div>
                <div class="card-footer">
                <button type="button" class="btn btn-success" name="btn_submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </div>
    
</body>
</html>