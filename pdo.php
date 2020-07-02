<?php
$name = $_POST['name'];
try{
    $pdo = new PDO('mysql:host=localhost;dbname=libs;charset=utf8', 'root','');
    $sql = "SELECT * FROM books LEFT JOIN autor ON books.autor_id=autor.id";
    $result = $pdo->prepare($sql);
    $result->execute();
    $set = $result->fetch();
  
}
catch(PDOException $e){
    echo $e-> getMessage();
}
