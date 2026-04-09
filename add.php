<?php
include 'db.php';
?>

<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

    <div class="mx-auto" style="max-width: 600px;">

        <h2 class="mb-4 text-center">Add Customer</h2>

        <form method="POST" class="card p-4 shadow-sm">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-success">Add</button>
            </div>

        </form>

    </div>

<?php include 'footer.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    // added protection against SQL injection with bind param
    $stmt = $conn->prepare("INSERT INTO customers (name, address, city) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $city);
    $stmt->execute();

    header("Location: index.php");
}
?>