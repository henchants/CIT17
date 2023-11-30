<!DOCTYPE html>
<html>
<head>
    <title>PHP in HTML</title>
</head>
<body>
    <h1>Welcome to My PHP Page</h1>

    <?php
    // PHP code embedded in HTML
    $name = "Henry C";
    $age = 30;
    ?>

    <p>Name: <?php echo $name; ?></p>
    <p>Age: <?php echo $age; ?></p>
</body>
</html>