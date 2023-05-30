<?php
//conexão! ! ! !
try {
    $pdo = new PDO("mysql:dbname=crudpdo;host=localhost", "root", "");
    //dbname
    //host
    //usuario
    //senha
} catch ( PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "Erro genérico:".$e->getMessage();
}
//-------insert
//1 forma
$res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email)
 VALUES (:n, :t, :e)"); //passa parametro e substitui
 //pra fazer a substituição tem dois metodos:
 $res->bindValue("", ""); //aceita varias coisas
 $res->bindparam(":n", ""); //aceita apenas variaveis


//2 forma
$pdo->query(); //nao substitui


?>