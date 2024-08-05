<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'Admin' && $password === 'MIT122') {
    header('Location: admin/admin.php');
    exit();
} else {
    header('Location: shopping/shopping.php');
    exit();
}
?>