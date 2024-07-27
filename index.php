<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="container">
    <h1>Welcome to My Online Store</h1>
    <div class="products">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='img/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p> $" . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
