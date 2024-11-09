<?php
// Get the current year for the footer
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal Presentation</title>
    <link rel="stylesheet" href="styles.css">  <!-- Link to your CSS file here -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Presentation</h1>
            <p>Welcome to the presentation</p>
        </header>

        <section class="content">
            <h2>Introduction</h2>
            <p>This is a presentation created with PHP, HTML, and CSS.</p>

            <h2>Objectives</h2>
            <ul>
                <li>Learn Distributed Programming.</li>
                <li>Understand Distributed Programming.</li>
                <li>Develop Applications.</li>
            </ul>

            <h2>Technical Details</h2>
            <p>This project uses PHP for server logic and HTML for presentation.</p>
        </section>

        <footer>
            <p>&copy; <?php echo $year; ?> Erick Riofrio. All rights reserved.</p>
        </footer>

    </div>

</body>
</html>