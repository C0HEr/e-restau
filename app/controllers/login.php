<?php

namespace App\Controllers;
use App\Models\User;

class Login
{
    public static function checkAcount($Info)
    {
        $account = User::getUser($Info["email"]);
        if((count($account)>0) && (md5($Info["password"]) == $account[0]["password"])){
            header("Location: /admin");
        } else {
            header("Location: /login");
        }

    }
}