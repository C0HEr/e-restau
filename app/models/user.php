<?php

namespace app\models;

use PDO;
use App\Models\Model;

class User extends Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM User');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUser($email)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM User WHERE email ='".$email."'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}