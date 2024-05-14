<?php
include 'koneksi.php';

// Check connection
if ($connection->connect_error) {
    die("Koneksi Gagal: " . $connection->connect_error);
}

// Get user input
$email = $_POST["email"];
$password = $_POST["password"];

// Start a transaction
$connection->begin_transaction();

try {
    // Prepare the SQL statement
    $query = "INSERT INTO loginregister (email, password) VALUES (?, ?)";
    $stmt = $connection->prepare($query);

    if (!$stmt) {
        throw new Exception("Kesalahan persiapan pernyataan: " . $connection->error);
    }

    // Bind parameter to the statement
    $stmt->bind_param('ss', $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: login.php');
        // Commit the transaction
        $connection->commit();
    } else {
        echo "Registrasi gagal: " . $stmt->error;
        // Rollback the transaction on failure
        $connection->rollback();
    }

    // Close the statement
    $stmt->close();
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
    // Rollback the transaction on exception
    $connection->rollback();
}

// Close the connection
$connection->close();
?>