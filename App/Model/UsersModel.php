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
}