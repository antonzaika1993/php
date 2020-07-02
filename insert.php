<?php
$autor_id =1;
$book_name = $_POST['name'];
$price = $_POST['price'];
$lang = $_POST['lang'];
$pdo = new PDO('mysql:host=localhost;dbname=libs;charset=utf8', 'root','');
    // TODO: add check exist variable
    $sql2= 'INSERT INTO books(autor_id, book_name, price, lang) VALUES(:autor_id, :book_name, :price, :lang)';
    $stmt = $pdo->prepare($sql2);
    $stmt->execute(['autor_id'=>$autor_id,'book_name'=>$book_name,'price'=>$price,'lang'=>$lang]);
    //TODO add redirect to index.php