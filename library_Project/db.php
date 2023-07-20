<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=sql105.infinityfree.com; dbname=if0_34652479_libraryopear","if0_34652479","N8wmQP7kxgyPhN");
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}


