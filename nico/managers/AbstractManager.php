<?php


abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        

$host = "localhost";
$port = "3306";
$dbname = "the-league-project";

$user = "root";
$password = "";

$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
$this->db = new PDO(
  $connexionString,
    $user,
    $password ,
);
}
}