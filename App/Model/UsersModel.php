<?php

namespace App\Model;

use Core\Model;

class UsersModel extends Model
{
	protected function loginModel($username)
	{
		$query = 'SELECT * FROM users WHERE username = :username';
        $sql = $this->db->prepare($query);
        $sql->bindParam(':username', $username);
        $sql->execute();
        return $sql->fetch();
	}
	
	protected function showUsersModel()
	{
		$query = 'SELECT * FROM users';
        $sql = $this->db->prepare($query);
        $sql->execute();
        return $sql->fetchAll();
	}

	protected function newUserModel($data)
	{
		$query = 'INSERT INTO users(name, username, password, role, photo) VALUES (:name, :username, :password, :role, :photo)';
        $sql = $this->db->prepare($query);
        $sql->bindParam(':name', $data['name']);
        $sql->bindParam(':username', $data['username']);
        $sql->bindParam(':password', $data['password']);
        $sql->bindParam(':role', $data['role']);
		$sql->bindParam(':photo', $data['photo']);
        $sql->execute();
        return $sql;
	}
}