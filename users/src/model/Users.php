<?php
require_once '../src/connectToDb/ConnectToDb.php';

class Users
{
    public ConnectToDb $connection;
    private const DB_NAME = 'users';

    public function getUsers(): array
    {
        $query = 'SELECT * FROM ' . self::DB_NAME;
        $usersStatement = $this->connection->connectToDb()->query($query);
        $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUser($username)
    {
        $query = 'SELECT * FROM ' . self::DB_NAME . ' WHERE username = :username';
        $userStatement = $this->connection->connectToDb()->prepare($query);
        $userStatement->execute([
            'username' => $username
        ]);

        $user = $userStatement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}