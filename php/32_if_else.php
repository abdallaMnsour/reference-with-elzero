<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<span style="font-family: Arial;border-left: 2px solid #fa0">you\'r name is : '. $_POST['username'].'</span>';
        echo '<br>';
        echo '<span style="font-family: Arial;border-left: 2px solid #fa0">and you\'r age is : '. $_POST['age'].'</span>';
        echo '<br>';
        echo '<span style="font-family: Arial;border-left: 2px solid #fa0">and this is you\'r password : '. $_POST['password'].'</span>';
        echo '<br>';
        echo '<span style="font-family: Arial;border-left: 2px solid #fa0">and this is you\'r language : '. $_POST['language'].'</span>';    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>hello</legend>
            <div style="display: block;">
                <input id="name" type="text" name="username">
                <label for="name">enter you'r name</label>
            </div>
            <div style="display: block;">
                <input id="password" type="password" name="password">
                <label for="password">enter you'r password</label>
            </div>
            <div style="display: block;">
                <input id="age" type="number" name="age">
                <label for="age">enter you'r age</label>
            </div>
            <select name="language" id="">
                <option  value="arabic">Arabic</option>
                <option  value="english">English</option>
                <option  value="spanish">Spanish</option>
            </select>
            <input type="submit" value="Go">
        </fieldset>
        
    </form>
</body>
</html>