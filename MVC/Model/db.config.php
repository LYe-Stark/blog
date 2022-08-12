<?php
abstract class dbConfig{
    private $user="Vl";
    private $password="gera123";

    protected function dbConnect(){
        return new PDO('mysql:host=localhost; dbname=blog',$this->Vl,$this->gera123);
    }
}