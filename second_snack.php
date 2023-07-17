<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second snack</title>
</head>

<body>

    <span>Result:</span>
    <?php if (!strlen($name) > 3 || !str_contains($email, '.') || !str_contains($email, '@') || is_nan($age)) : ?>
        <span style="color: red;"><strong>Not allowed</strong></span>
    <?php else : ?>
        <span style="color: green;">Login successful</span>
        <?= $name ?>
        <?= $email ?>
        <?= $age ?>
    <?php endif ?>
</body>

</html>