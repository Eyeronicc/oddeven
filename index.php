<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even </title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body class="dark">
    <div class="container">
        <div class="box">
            <div class="mode-switch">
                <label class="switch">
                    <input type="checkbox" id="theme-toggle">
                    <span class="slider"></span>
                </label>
            </div>
            <h1>Odd or Even</h1>
            <form method="POST" action="">
                <input type="number" name="numberInput" placeholder="Enter a number" required>
                <button type="submit" id="checkBtn">Check</button>
            </form>

            <div id="result">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number = $_POST['numberInput'];
                        if ($number % 2 == 0) {
                            echo "<p style='color: lightgreen;'>The number $number is Even!</p>";
                        } else {
                            echo "<p style='color: salmon;'>The number $number is Odd!</p>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
