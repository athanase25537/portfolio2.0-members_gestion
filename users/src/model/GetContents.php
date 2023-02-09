<?php
require_once '../src/connectToDb/ConnectToDb.php';

class GetContents
{
    public ConnectToDb $connection;
    private const DB_NAME = 'contents';

    public function getAllContents($idUser): array
    {
        $query = 'SELECT * FROM ' . self::DB_NAME . ' WHERE id_user = :id_user';
        $contentsStatement = $this->connection->connectToDb()->prepare($query);
        $contentsStatement->execute([
            'id_user' => $idUser
        ]);
        $contents = $contentsStatement->fetchAll(PDO::FETCH_ASSOC);
        return $contents;
    }

    public function getContent($id)
    {
        $query = 'SELECT * FROM ' . self::DB_NAME . ' WHERE id = :id';
        $contentStatement = $this->connection->connectToDb()->prepare($query);
        $contentStatement->execute([
            'id' => $id
        ]);

        $content = $contentStatement->fetch(PDO::FETCH_ASSOC);
        return $content;
    }
}