<?php
ob_start(); // Start output buffering
session_start();
$login_error = false;

// Check if user is logged in
if (isset($_SESSION['username'])) {
    // Redirect to form page
    header('Location: form.php');
    exit();
}

// Check if already on login page
if (!strpos($_SERVER['REQUEST_URI'], 'login.php')) {
    // Redirect to login page
    header('Location: login.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_pairs = file('login.txt', FILE_IGNORE_NEW_LINES);

    $found_user = false;

    foreach ($login_pairs as $login_pair) {
        // Trim the line to remove any leading or trailing whitespace
        $login_pair = trim($login_pair);
        $pair = explode(":", $login_pair);
        if ($pair[0] == $username && $pair[1] == $password) {
            $found_user = true;
            break;
        }
    }

    if ($found_user) {
        $_SESSION['username'] = $username;
        header("Location: form.php");
        exit;
    } else {
        $login_error = true;
    }
}

ob_end_flush(); // End output buffering and send the output to the browser
?>

<?php include("header.php"); ?>

<section class="spacial">
    <h2>Login</h2>
    <?php if ($login_error) : ?>
        <p class="error">Invalid username or password. Please try again.</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]+" minlength="1" maxlength="20">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required pattern="(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{4,}" minlength="4" maxlength="20">
        <br>
        <input type="submit" value="Login">
    </form>
</section>

<?php include("footer.php"); ?>
