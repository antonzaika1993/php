<?php
$up_data_price = $_POST['up_data_price'];
$book_name = $_POST['up_data_name'];
$id = $_POST['id'];
$delete = $_POST['delete'];
try{
    $pdo = new PDO('mysql:host=localhost;dbname=libs;charset=utf8', 'root','');
    $sql = "SELECT * FROM books LEFT JOIN autor ON books.autor_id=autor.id";
    $result = $pdo->prepare($sql);
    $result->execute();
    $set = $result->fetchAll();

    $sql3= 'UPDATE books SET  book_name = :book_name WHERE id =:id' ;
    $stmt = $pdo->prepare($sql3);
    $stmt->execute(['id'=>$id,'book_name'=>$book_name]);

    $sql4= 'DELETE FROM books  WHERE id =:id' ;
    $stmt = $pdo->prepare($sql4);
    $stmt->execute(['id'=>$delete]);
}
catch(PDOException $e){
    echo $e-> getMessage();
}


