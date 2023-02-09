<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Add
{
    public ConnectToDb $connection;
    private const TABLE_NAME = 'contents';

    public function addContentToDb(
        String $idUser,
        String $title,
        String $description,
        $imgDescription)
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (id_user, title, description, img_description, creation_date) 
            VALUES (:id_user, :title, :description, :img_description, NOW())';
        $addStatement = $this->connection->connectToDb()->prepare($query);
        $addStatement->execute([
            'id_user' => $idUser,
            'title' => $title,
            'description' => $description,
            'img_description' => $imgDescription
        ]);

        return $addStatement > 0;
    }
}