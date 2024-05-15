<?php
session_start();

// Function to check if user is logged in
function isLoggedIn(){
    return isset($_SESSION['username']);
}

// Function to check if user is an admin
function isAdmin(){
    return isset($_SESSION['role']) && $_SESSION['role'] == 'admin';
}

// Function to redirect user to login page if not logged in
function redirectToLogin(){
    if (!isLoggedIn()) {
        header("Location: pkwu_home-master/beranda.php");
        exit();
    }
}

// Function to redirect admin to admin dashboard if not an admin
function redirectToAdminDashboard(){
    if (isLoggedIn() && !isAdmin()) {
        header("Location: admin/index.php");
        exit();
    }
}

// Function to logout user
function logout(){
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: login.html");
    exit();
}

// Database connection
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "mie_ayam";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check user type
    $user_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $admin_query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $user_result = $conn->query($user_query);
    $admin_result = $conn->query($admin_query);

    // Check if user or admin exists
    if ($user_result->num_rows > 0) {
        // User exists, redirect to homepage
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "user";
        header("Location: pkwu_home-master/beranda.php");
        exit();
    } elseif ($admin_result->num_rows > 0) {
        // Admin exists, redirect to admin dashboard
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "admin";
        header("Location: admin/index.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login page
        header("Location: login.html");
        exit();
    }
}

$conn->close();
?>
