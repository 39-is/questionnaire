<?php
namespace lib;

use db\UserQuery;

class Auth {
    public static function login($id, $pwd) {
        $is_success = false;
    
        $user = UserQuery::fetchById($id);
    
        if(!empty($user) && $user->del_flg !== 1){
    
            if (password_verify($pwd, $user->pwd)){
                $is_success = true;
                $_SESSION['user'] = $user;
            }else {
                echo 'not correct password';
            }
        }else {
                echo 'Not find user';
            }
        
        
        
            return $is_success;
    }

    public static function regist($id, $pwd, $nickname){
            $is_success = false;

            $exit_user = UserQuery::fetchById($id);

            if (!empty($exit_user)){
                echo 'ユーザーが既に存在します';
                return false;
            }

            $is_success = UserQuery::insert($id, $pwd, $nickname);
            return $is_success;
    }

}
