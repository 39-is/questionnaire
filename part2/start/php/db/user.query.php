<?php
namespace db;

use db\DataSource;
use model\UserModel;


class UserQuery { //データベースに接続してデータを取得
    public static function fetchById($id) {

    $db = new DataSource;
    $sql = '
            SELECT*FROM users WHERE id = :id;
            ';

    $result = $db->selectOne($sql, [
        ':id' => $id
    ], DataSource::CLS,UserModel::class); 

    return $result;

    }

    public static function insert($user){
        $db = new DataSource;
        $sql = 'insert into users (id, pwd, nickname) values (:id, :pwd, :nickname)';
        $user->pwd = password_hash($user->pwd, PASSWORD_DEFAULT);
        return $db->execute($sql, [
            ':id' => $user->id,
            ':pwd' => $user->pwd,
            ':nickname' => $user->nickname,
        ]); 
    
    }
}