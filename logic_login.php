<?php
include 'koneksi.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM loginregister WHERE email = ? AND password = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    if ($user) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.html');
        exit;
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>