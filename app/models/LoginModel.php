<?php

class LoginModel
{

    public function getUser($username, $password)
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM user WHERE username = $username");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
