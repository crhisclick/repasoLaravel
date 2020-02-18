<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de usuarios</title>
</head>
<body>
    <h1><?php echo e($titulo) ?></h1>
    <?php foreach($users as $user): ?>
    <li><?php echo e($user); ?></li>
    <?php   endforeach ;?>
</body>
</html>
