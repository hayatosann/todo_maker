<?php

require_once('Model.php');

class User extends Model
{
    protected $table = 'users';

    // ユーザーを新規作成するメソッド
    public function create($data)
    {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO '  . $this->table .  ' (email, password, created) VALUES (?,?,now())');
        $stmt->execute($data);
    }

    // emailをもとにユーザーを取得するメソッド
    public function findByEmail($data)
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE email = ?');
        $stmt->execute($data);
        $user = $stmt->fetch();
        return $user;
    }
}
