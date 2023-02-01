<?php
class ConnectToDb
{
    public ?PDO $db = null;

    public function connectToDb()
    {
        if($this->db == null){
            $this->db = new PDO(
                'mysql:host=localhost;dbname=portfolio2.0;charset=utf8',
                'root',
                '',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return $this->db;
    }
}