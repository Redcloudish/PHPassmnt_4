<?php
// Get the error message from the URL parameter
$error_message = isset($_GET['message']) ? $_GET['message'] : 'An error occurred.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p><?php echo htmlspecialchars($error_message); ?></p>
    <a href="add_product.php">Go Back</a>
</body>
</html>