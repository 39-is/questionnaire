<?php
namespace model;

use lib\Msg;

class TopicModel extends AbstractModel{
    public int $id;
    public string $title;
    public int $published;
    public int $views;
    public int $likes;
    public int $dislikes;
    public string $user_id;
    public int    $del_flg;


    protected static $SESSION_NAME = '_topic';

 public function isValidId(){
        return static::validateId($this->id);
    }

    public static function validateId($val){
        $res = true;
        if(empty($val)){

            Msg::push(Msg::ERROR, 'ユーザーID入力');
            $res = false;

        } else {

            if(strlen($val)> 10){

                Msg::push(Msg::ERROR, 'ユーザーIDは１０桁以下');
                $res = false;
            }

            if(!is_alnum($val)){
                Msg::push(Msg::ERROR, 'ユーザーIDは半角英数字');
                $res = false;
            }
        }
        return $res;
    }


    public static function validatePwd($val)
    {
        $res = true;

        if (empty($val)) {

            Msg::push(Msg::ERROR, 'パスワードを入力');
            $res = false;

        } else {

            if(strlen($val) < 4) {

                Msg::push(Msg::ERROR, 'パスワードは４桁以上で入力。');
                $res = false;

            } 
            
            if(!is_alnum($val)) {

                Msg::push(Msg::ERROR, 'パスワードは半角英数字で入力。');
                $res = false;

            }
        }

        return $res;
    }

    public function isValidPwd()
    {
        return static::validatePwd($this->pwd);
    }

    public static function validateNickname($val)
    {

        $res = true;

        if (empty($val)) {

            Msg::push(Msg::ERROR, 'ニックネームを入力してください。');
            $res = false;

        } else {

            if(mb_strlen($val) > 10) {

                Msg::push(Msg::ERROR, 'ニックネームは１０桁以下で入力してください。');
                $res = false;
                
            } 
        }

        return $res;
    }

    public function isValidNickname()
    {
        return static::validateNickname($this->nickname);
    }
}



