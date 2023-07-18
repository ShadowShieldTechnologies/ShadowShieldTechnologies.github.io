<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the purchase form submission and processing here
    // Connect to the database
    // Insert the purchase details into the database
    // Redirect the user back to the Services page or a thank you page
    // Example: header("Location: services.php");
    exit; // Prevent form resubmission
}
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <!-- Your head content here -->
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // If the request type is POST (coming from index.html), display the PHP content
        include_once "services_content.php";
    } else {
        // If the request type is GET, display the HTML content
        include_once "services_content.html";
    }
    ?>

    <!-- Your other modals and content here -->
    <!-- ... -->

    <!-- Your footer content here -->
    <!-- ... -->
</body>
</html>
