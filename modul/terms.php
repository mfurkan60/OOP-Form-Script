<?php require_once "components/header.php" ?>

<?php require_once "components/navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Terms Information</h2>
            <hr>
            <?php $sql = $db->Read("terms");
            $row = $sql->fetch(PDO::FETCH_ASSOC);

            ?>
            <div class="card border-primary mb-3 mt-3">
                <div class="card-header"> Terms Title: => <?= $row['terms_title'] ?> </div>
                <div class="card-body ">
                    <p>Terms : </p>
                    <p><?= $row['terms_text']; ?></p>
                </div>
            </div>


        </div>
    </div>
</div>
<?php require_once "components/footer.php"; ?>