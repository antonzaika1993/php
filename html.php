<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='insert.php'  method='post'>
        <label >
            <p>name:</p>
            <input type="text" name='name'>
            <p>price:</p>
            <input type="text" name='price'>
            <p>lang:</p>
            <input type="text" name='lang'>
            
        </label>
        <input type="submit" value='add'>
    </form>
    
    <h1>изменить данные</h1>

    <form  method='post'>
        <label >
            <p>id:</p>
            <input type="text" name='id'>
            <p>name:</p>
            <input type="text" name='up_data_name'>
        </label>
        <input type="submit" value='updata'>
    </form>
    <h2>удалить данные</h2>

    <form  method='post'>
        <label >
            <p>id:</p>
            <input type="text" name='delete'>
        </label>
        <input type="submit" value='delete'>
    </form>

    <ul>
    <?php
    foreach($set as $s){
        echo "<li>" .  $s[0] . ' ' . $s['book_name'] . '<br>';
    }
    ?>
    </ul>
    
</body>
</html>