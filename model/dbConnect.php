<?php
class Database
{
    //create database connection --- protected means that any other class that extends to this class has access

    public function connect()
    {

        try {
            $username = "root";
            $password = "";
            $dsn = new PDO("mysql:host = localhost; dbname=jetsudz", $username, $password);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "connected successfully!";
            return $dsn;
        }
        //if any error print an error message and kill the connection
        catch (PDOException $e) {
            //echo "Error: Not connected";
            die('Connection Error: ' . $e->getMessage());
        }
    }
}
