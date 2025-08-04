<?php
session_start();
include('config/connect.php');

// Registration
if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $contact  = $_POST['contact'];
    $password = md5($_POST['password']); // NOTE: Use password_hash() in production!

    $check = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $res = $check->get_result();

    if ($res->num_rows > 0) {
        echo "exists";
    } else {
        $stmt = $conn->prepare("INSERT INTO user (name, contact, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contact, $email, $password);
        if ($stmt->execute()) {
            echo "registered";
        } else {
            echo "error";
        }
    }
}

// Login
if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        echo "success";
    } else {
        echo "invalid";
    }
}
?>
