<?php
namespace controller\logout;

use lib\Auth;
use lib\Msg;

function get(){

    if(Auth::logout()){

        Msg::push(Msg::INFO, 'ログアウト成功');

    } else {

        Msg::push(Msg::ERROR, 'ログアウト失敗');
        
    }

    redirect(GO_HOME);

}