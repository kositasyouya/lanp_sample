<?php

$dsn = 'mysql:dbname=sample_db;host=localhost;';

$user = 'kosita';

$password = 'morijyobi';
try {

    $dbh = new PDO($dsn, $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $id = $_POST['id'];

    $name = $_POST['name'];

    $age = $_GET['age'];



    $sql = "delete from user where id=:id";

    $stmt = $dbh->prepare($sql);

    $prams = array(':id'=> $id);

    $stmt->execute($prams);



    header('Location: index.php?fg=1');

    

} catch (PDOException $e) {

	header('Location: index.php?fg=2?err='.$e->getMessage());

	exit();

}