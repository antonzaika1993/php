
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $image = $_FILES["image"]["name"];
    
    $pdo = new PDO('mysql:host=localhost;dbname=libs;charset=utf8', 'root','');
    $sql = "SELECT * FROM img";
     $result = $pdo->prepare($sql);
     $result->execute();
     $set = $result->fetchAll();

     $sql2= 'INSERT INTO img(img) VALUES(:img)';
     $stmt = $pdo->prepare($sql2);
     $stmt->execute(['img'=>$image]);

     foreach($set as $r ){
         echo "<img src='data:image;base64,", base64_encode($r[1]), "' alt='' width='200' height='200' />" . '<br>';
     };

      
    ?>
    <form action='create.php' method="POST">
        <input type="file" name="image" enctype="multipart/form-data">
        <input type="submit" value="Upload">
    </form>    
    
</body>
</html>