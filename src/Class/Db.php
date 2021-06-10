<?php


class Db
{
     private string $host     = "***.***.*.**";
     private string $dbname   = "********";
     private string $user     = "********";
     private string $password = "";

     public function connection(): PDO
     {
          $pdo = new PDO("pgsql: host= $this->host ;dbname=$this->dbname;", $this->user, $this->password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
     }

     public function exe_login(string $sql):array
     {
          $conn = $this->connection();
          $res  = $conn->prepare($sql);
          $res->execute();

          return $res->fetchAll(PDO::FETCH_ASSOC);
     }
}