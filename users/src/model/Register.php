<?php
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

class Register
{
    public Users $users;
    public ConnectToDb $connection;
    private const TABLE_NAME = 'users';

    public function insertToDb(
        String $name,
        String $firstName,
        $birth,
        String $email,
        String $tel,
        String $username,
        String $password,
        $photo,
        String $sexe)
    {
        $query = 'INSERT INTO ' . self::TABLE_NAME . ' (name, firstname, birth, email, tel, username, password, photo, sexe, creation_date) 
            VALUES (:name, :firstname, :birth, :email, :tel, :username, :password, :photo, :sexe, NOW())';
        $insertStatement = $this->connection->connectToDb()->prepare($query);
        $insertStatement->execute([
            'name' => $name,
            'firstname' => $firstName,
            'birth' => $birth,
            'email' => $email,
            'tel' => $tel,
            'username' => $username,
            'password' => password_hash($password, 0, ['cost' => 14]),
            'photo' => $photo,
            'sexe' => $sexe
        ]);

        return $insertStatement > 0;
    }

    public function isValidUserName($username)
    {
        $users = $this->users->getUsers();

        foreach($users as $user){
            if($username == $user['username']){
                return false;
            }
        }
        return true;
    }
}