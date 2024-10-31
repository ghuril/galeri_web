<?php
include 'koneksi.php'; 
session_start();

if (isset($_GET['id']) && isset($_SESSION['user_id'])) {
    $photo_id = $_GET['id'];

    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM photos WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $photo_id, $_SESSION['user_id']);

    if ($stmt->execute()) {
        header("Location: ?url=album&message=Photo deleted successfully.");
    } else {
        header("Location: ?url=album&error=Failed to delete photo.");
    }

    $stmt->close();
} else {
    header("Location: ?url=home");
}
?>
