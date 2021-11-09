<?php

// All Hide Error on the system 
//error_reporting(0);
require_once "Class/class.crud.php";
$db = new crud();

require_once "Class/setconfig.php";
$setConfig = new setConfig();
$setConfig->sessionControlOk($_SESSION['admins']);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <title> Login</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center"> Login to System</h2>
                        <?php
                        if (isset($_POST['login'])) {
                            $resut = $db->AdminsLogin(
                                htmlspecialchars($_POST['adminsUsername']),
                                htmlspecialchars($_POST['adminsPassword'])
                            );
                            //crud metodunda işlemler bitince çalışır
                            if (['status']) {
                                Header("Location:index.php");
                                exit;
                            } else if (['status'] == false) { ?>
                                <div class="alert alert-danger" role="alert">
                                    We have a some problem!!!
                                </div>
                        <?php    }
                        }
                        ?>




                    </div>
                    <div class="card-body">



                        <form class="needs-validation mt-4 p-4" method="POST" action="" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01"> User Name</label>
                                    <input type="text" class="form-control" name="adminsUsername" id="validationCustom01" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Please enter your name
                                    </div>


                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02"> Password</label>
                                    <input type="password" class="form-control" name="adminsPassword" id="validationCustom02" placeholder="Your Surname" required>
                                    <div class="invalid-feedback">
                                        Please enter your Password
                                    </div>

                                </div>
                            </div>







                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block " name="login" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
</body>

</html>