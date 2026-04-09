<?php
include 'header.php';
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM customers WHERE id = $id");
$row = $result->fetch_assoc();
?>

    <div class="mx-auto" style="max-width: 600px;">

        <h2 class="mb-4 text-center">Edit Customer</h2>

        <form method="POST" class="card p-4 shadow-sm">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" value="<?= $row['address'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" value="<?= $row['city'] ?>" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>

        </form>

    </div>

<?php include 'footer.php'; ?>

<?php
// check if the form is submitted, only runs if update is pressed
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
// a safe version of the query that prevents SQL injection by binding the values to the placeholders
    $stmt = $conn->prepare("UPDATE customers SET name=?, address=?, city=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $address, $city, $id);
    $stmt->execute();
// go back to main page if the updating worked
    header("Location: index.php");
}
?>