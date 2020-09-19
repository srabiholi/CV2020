<?php 
$pdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');

$stmt = $pdo->prepare('SELECT exp_tache as tache FROM t_experience WHERE exp_id = :id');
$stmt->bindValue( 'id', $_GET['id'] );
$stmt->execute();

$tache = $stmt->fetch();  
    
    // var_dump( $tache );
echo json_encode( $tache );