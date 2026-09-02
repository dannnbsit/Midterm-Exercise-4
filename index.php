<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Exercise #4 -Group Activity using POST Method</title>
</head>
<body>

    <h1>Group Activity Using POST Method</h1>

    <form action="" method="post">

        <label for="">Enter you name:</label>
        <input type="text" name="name" require>

        <br><br>
        
        <label for="">Enter your course</label>
        <input type="text" name="course" require>

        <br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>





<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

        $name = $_POST["name"];
        $course = $_POST["course"];

        echo "<h2>Submitted Information</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Course: " . htmlspecialchars($course);

    }

?>

<!-- post method -->

