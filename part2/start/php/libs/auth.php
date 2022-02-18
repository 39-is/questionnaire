<?php
namespace lib;

use db\UserQuery;
use model\UserModel;


class Auth {
    public static function login($id, $pwd) {
        $is_success = false;
    
        $user = UserQuery::fetchById($id);
    
        if(!empty($user) && $user->del_flg !== 1){
    
            if (password_verify($pwd, $user->pwd)){
                $is_success = true;
                UserModel::setSession($user);
            }else {
                echo 'not correct password';
            }
        }else {
                echo 'Not find user';
            }
        
        
        
            return $is_success;
    }

    public static function regist($user){
            $is_success = false;

            $exit_user = UserQuery::fetchById($user->id);

            if (!empty($exit_user)){
                echo 'ユーザーが既に存在します';
                return false;
            }


            $is_success = UserQuery::insert($user);


            if ($is_success) {
                UserModel::setSession($user);
                $_SESSION['user'] = $user;
            }


            return $is_success;
    }
        public static function islogin(){
            $user = UserModel::getSession();

            if (isset($user)) {
                return true;
            } else {
                return false;
            }
        }
}
