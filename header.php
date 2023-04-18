<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Q7.css">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="logo-container">
            <a href="index.php" class="logo">petAdopt</a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Create-an-account.php">Create an account</a></li>
                <li><a href="Cat-care.php">Cat Care</a></li>
                <li><a href="Dog-care.php">Dog Care</a></li>
                <li><a href="Find-a-dog-cat.php">Find a dog/cat</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="form.php">Have a pet to give away</a></li>
                <?php else: ?>
                    <li><a href="login.php">Have a pet to give away</a></li>
                <?php endif; ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="Contact-Us.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <header>
            <a href="index.php">
                <img class="header-logo" src="img/logo.png" alt="logo" width="50" height="50">
            </a>
            <span class="brandName">petAdopt</span>
            <span id="current-date-time"></span>
        </header>