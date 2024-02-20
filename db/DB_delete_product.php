<?php
session_start();
require_once('db_connection.php');

if(isset($_POST['delete_product']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        echo "Product deleted successfully!";
    } else {
        echo "Failed to delete product.";
    }
    
    $stmt->close();
    $stmt->close();

    header('Location: ../pages/kasir/manage_product.php');
    exit;
}
?>