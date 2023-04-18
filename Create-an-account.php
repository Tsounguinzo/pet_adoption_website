<?php
include("header.php");

// Define the allowed format for usernames and passwords using regular expressions
$username_pattern = '/^[a-zA-Z0-9]+$/';
$password_pattern = '/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{4,}$/';

// Function to validate username and password format
function validate_input($username, $password) {
    global $username_pattern, $password_pattern;
    if (!preg_match($username_pattern, $username)) {
        return false;
    }
    if (!preg_match($password_pattern, $password)) {
        return false;
    }
    return true;
}

// Function to check if the username already exists
function username_exists($username) {
    // Open the login file
    $file = fopen('login.txt', 'r');
    // Loop through each line of the file
    while (!feof($file)) {
        $line = trim(fgets($file));
        if ($line != "") {
            // Extract the username from the line
            $login_info = explode(':', $line);
            $existing_username = $login_info[0];
            // Check if the username already exists
            if ($existing_username == $username) {
                fclose($file);
                return true;
            }
        }
    }
    fclose($file);
    return false;
}

// Function to create a new account
function create_account($username, $password) {
    global $message;
    if (username_exists($username)) {
        // If the username already exists, send back a message requesting a new username/password pair
        $message = "Username is not available. Please choose another username.";
        return;
    }
    // Validate the entered username and password format
    if (!validate_input($username, $password)) {
        // If the username/password pair doesn't meet the specified criteria, send back an error message
        $message = "Invalid username/password format. Please try again.";
        return;
    }
    // Write the new pair to the login file
    // Format: username:password\n
    $new_login = $username . ':' . $password . "\n";
    $file = fopen('login.txt', 'a');
    fwrite($file, $new_login);
    fclose($file);
    // Send a message to the content area confirming that the account was successfully created
    $message = "Account created successfully. You can now login with your new account.";
}

$message = null;
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    create_account($username, $password);
}
?>

<section class="spacial">
    <!-- HTML code for the login creation page -->
    <h2>CREATE AN ACCOUNT</h2>
    <?php if ($message != null) : ?>
        <p class="error"><?=$message?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username" class="">Username:</label>
        <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]+" minlength="1" maxlength="20">
        <br>
        <label for="password" class="">Password:</label>
        <input type="password" id="password" name="password" required pattern="(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{4,}" minlength="4" maxlength="20">
        <br>
        <input type="submit" value="Create Account">
    </form>
</section>

<?php
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    create_account($username, $password);
}
?>

<?php
include "footer.php";
?>