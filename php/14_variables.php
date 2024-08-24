<?php 
    $name = 'abdalla';
    $age = 21;
    $placeholder = 'inter text';
?>
<?php include '12_array.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php variables</title>
</head>
<body style="font-family:Arial, Helvetica, sans-serif">
    <h1><?php print $name?></h1>
    <h2><?php echo $height?></h2>
    <p style="font-size: 20px">my name is <?= $name?> and my age is <?php echo $age?></p>
    <input type="text" placeholder="<?= $placeholder?>">
</body>
</html>