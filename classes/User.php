<?php

namespace classes;


class User
{
    static function isLogin()
    {
        return (isset($_SESSION['user']));
    }

    static function login($username, $password)
    {
        $db = new database("phpdb");
        $user = $db->query("SELECT * FROM users WHERE users.username='$username'")[0];
        print_r($user);
        if ($password === $user["password"]) {
            $_SESSION["user"] = $user["id"];
        }
    }

    static function logout()
    {
        unset($_SESSION["user"]);
    }

    static function get(){
        $db = new database("phpdb");
        return $db ->query("SELECT * FROM users WHERE id=" . $_SESSION["user"])[0];

    }
}
