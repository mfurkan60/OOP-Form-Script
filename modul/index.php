<?php require_once "components/header.php" ?>

<?php require_once "components/navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1> General Information About Your Account</h1>

                <div class="card border-primary mb-3">
                    <div class="card-header">Sessions Informations</div>
                    <div class="card-body text-primary">
                        <p>Username : <?php echo $_SESSION['admins']['adminsUserName'];  ?></p>
                        <p>Name And Surname : <?php echo $_SESSION['admins']['admins_namesurname'];  ?></p>
                        <p>Admin Registered Time : <?php echo $_SESSION['admins']['admin_time'];  ?></p>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<?php require_once "components/footer.php"; ?>