<?php
session_start();
include_once '../config/db.php';
include_once '../models/User.php';

$action = $_GET['action'] ?? '';

if ($action === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $userModel = new User($conn);
    $user = $userModel->getUserByEmail($email);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['user_name'] = $user['name'];
        header("Location: ../views/dashboard/index.php");
        exit();
    } else {
        $error = "Credenciales inválidas";
        header("Location: ../views/auth/login.php?error=" . urlencode($error));
        exit();
    }
} else {
    header("Location: ../views/auth/login.php");
    exit();
}
?>
