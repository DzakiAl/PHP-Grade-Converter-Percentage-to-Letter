<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Converter Percentage to Letter</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin: 31vh 0 0 0;
        }

        .input {
            background-color: transparent;
            border: none;
            border-bottom: 0.2vw solid white;
            width: 25vw;
            height: 3vw;
            color: white;
            margin: 0 0 2.5vw 0;
        }

        .button {
            width: 12vw;
            height: 4vw;
            background-color: transparent;
            border: none;
            border: 0.2vw solid white;
            color: white;
            font-size: 1.2vw;
            transition: 0.5s all ease-in-out;
        }

        .button:hover {
            background-color: white;
            color: black;
            transition: 0.5s all ease-in-out;
        }
    </style>
</head>
<body align="center">
    <div class="container" align="center">
        <h1>Grade Converter Percentage to Letter</h1>
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="grade" placeholder="Insert your grade" class="input"><br>
            <input type="submit" class="button">
        </form>
        <h2>Your output:</h2>
    </div>
    <?php
        if (isset($_GET["grade"])) {
            $grade = $_GET["grade"];

            if ($grade >= 90) {
                echo "<h1>A</h1>";
            } elseif ($grade >= 80) {
                echo "<h1>B</h1>";
            } elseif ($grade >= 78) {
                echo "<h1>C</h1>";
            } else {
                echo "<h1>D</h1>";
            }
        }
    ?>
</body>
</html>