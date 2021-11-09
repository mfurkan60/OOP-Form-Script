<?php require_once "components/header.php" ?>

<?php require_once "components/navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2> Personal Training Informed Consent Form</h2>



            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Surname</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date</th>
                        <th>Process</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sql = $db->Read("forms");
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?> </th>
                            <td><?= $row['full_name'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['date'] ?></td>
                            <td>
                                <a href="register-view.php?id=<?= $row['id'] ?>"><i class="fas fa-eye"></i></a>
                                <a href=""><i class="fas fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php require_once "components/footer.php"; ?>