<?php
namespace lib;

use db\UserQuery;
use db\TopicQuery;
use model\UserModel;
use Throwable;

class Auth {
    public static function login($id, $pwd) {
        try{ 
            if(!(UserModel::validateId($id)
               * UserModel::validatePwd($pwd))){
                return false;
            }
            
            $is_success = false;
    
        $user = UserQuery::fetchById($id);
    
        if(!empty($user) && $user->del_flg !== 1){
    
            if (password_verify($pwd, $user->pwd)){
                $is_success = true;
                UserModel::setSession($user);
            }else {
                Msg::push(Msg::ERROR, 'Not Correct password');
                
            }
        }else {
            Msg::push(Msg::ERROR, 'Not Find user');
            }
        

        } catch(Throwable $e){
            $is_success = false;
            Msg::push(Msg::DEBUG, $e->getMessage());
            Msg::push(Msg::ERROR, 'ログイン処理にエラーが出たよ');

        }



        
        
        
            return $is_success;
    }

    public static function regist($user){
        try{ 
            if(!($user->isValidId()
            * $user->isValidPwd()
            * $user->isValidNickname())){
                return false;
            }
            $is_success = false;

            $exit_user = UserQuery::fetchById($user->id);

            if (!empty($exit_user)){
                Msg::push(Msg::ERROR,'ユーザーが既に存在します');
                return false;
            }


            $is_success = UserQuery::insert($user);


            if ($is_success) {
                UserModel::setSession($user);
                $_SESSION['user'] = $user;
            }

        } catch(Throwable $e){
            $is_success = false;
            Msg::push(Msg::DEBUG, $e->getMessage());
            Msg::push(Msg::ERROR, 'ユーザー登録処理にエラーが出たよ');

        }


            return $is_success;
    }
        public static function islogin(){
            try{
                $user = UserModel::getSession();
            } catch(Throwable $e){
                UserModel::clearSession();
                Msg::push(Msg::DEBUG, $e->getMessage());
                Msg::push(Msg::ERROR, 'エラーが出たよ。再度ログイン');
                return false;


            }


            if (isset($user)) {
                return true;
            } else {
                return false;
            }
        }

    public static function logout(){
        try{
            UserModel::clearSession();
            
        } catch(Throwable $e){
            UserModel::clearSession();
            Msg::push(Msg::DEBUG, $e->getMessage());
            
            return false;


        }
        return true;
    }

    public static function requireLogin(){
        if(!static::islogin()){
            Msg::push(Msg::ERROR, 'ログインしてね');
            redirect('login');
        }
    }

    public static function hasPermission($topic_id, $user) {
        
        return TopicQuery::isUserOwnTopic($topic_id, $user);

    }



    public static function requirePermission($topic_id,$user){

        if (!static::hasPermission($topic_id, $user)) {
            Msg::push(Msg::ERROR,'再度ログインしてね');
        redirect('login');
        }
        
    }
}
