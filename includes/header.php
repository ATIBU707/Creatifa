<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatifa</title>
    <?php
    $stylesheets = [
        'header.css',
        'footer.css',
        'index.css',
        'about.css',
        'services.css',
        'contact.css'
    ];

    foreach ($stylesheets as $stylesheet) {
        echo '<link rel="stylesheet" href="css/' . $stylesheet . '">' . PHP_EOL;
    }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <nav id="main">
            <div class="logo">
                <img src="./images/logo.webp" alt="logo">
                <h2>Creatifa</h2>
            </div>
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="submenu"><a href="services.php">Services</a>
                    <ul class="dropdown">
                        <li><a href="art.php">Art</a></li>
                        <li><a href="craft.php">Craft</a></li>
                        <li><a href="design.php">Design</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <nav id="mobile-menu">
            <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="submenu"><a href="services.php">Services</a>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="icon-message">
        <i class="fas fa-info-circle"></i> Welcome to Creatifa!
    </div>
    <!-- Page content starts here -->

