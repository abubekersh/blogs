<?php
namespace core;

use PDO;

class Database{
    private $con;
    private $stmnt;

    public function __construct($config,$user="root",$pass="12345678"){
        $d = "mysql:".http_build_query($config,"",";");
        $this->con= new PDO($d,$user,$pass);
    }
    public function query($query,$param=[]) {
       $stmnt = $this->con->prepare($query);
       $stmnt->execute($param);
       return $stmnt;
    }
    public function lastId(){
        return $this->con->lastInsertId();
    }
    public function fetch() {
        return $this->stmnt->fetch();
    }
    public function get() {
        return $this->stmnt->fetchAll();
    }
}