<?php
namespace db;

use db\DataSource;
use model\UserModel;


class UserQuery {
    public static function fetchById($id) {

    $db = new DataSource;
    $sql = 'SELECT*FROM users WHERE id = :id;';

    $result = $db->selectOne($sql, [
        ':id' => $id
    ], DataSource::CLS,UserModel::class); 
    
    return $result;

    }
}