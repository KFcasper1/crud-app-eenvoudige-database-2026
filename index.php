<?php
// Include database and bootstrap
// test 2
include 'header.php';
include 'db.php';
// collect the database
$result = $conn->query("SELECT * FROM customers");
?>


<!-- Link for adding new customer -->

    <div class="mx-auto" style="max-width: 900px;">

        <h1 class="mb-4 text-center">Customers</h1>

        <div class="text-center mb-3">
            <a href="add.php" class="btn btn-primary">Add Customer</a>
        </div>

        <table class="table table-bordered table-striped text-center">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Actions</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['city'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

    </div>

<?php include 'footer.php'; ?>